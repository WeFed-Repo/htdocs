
//Investimenti - Acquisto - start
var firstCallToPac = false;	//Caricare dati nel sezione PAC solo prima volta
var bankName = '';			//Preview
var buyFundSelectBeanJson ='', 
	buyFundSelectRequestJson = '', 
	buyFundPreviewBeanJson = '', 
	buyFundPreviewRequestJson = '', 
	buyFundConfirmBeanJson = '',
	depositoCustomer = '',
	stringa_N = 'N', stringa_S='S', stringa_F='F', stringa_Fondo='Fondo', stringa_Sicav='Sicav', stringa_EUR='EUR',stringa_failure='failure'
	,fundJson = ''
	, datiMifid = {}, datiAdeVer = {}, methodAdeVer = '';		
var listaDepPIR = '', erroreDepPIR = '';
var docOn = 0;

var newRepoAbilitati=false;
var newRepoAbilitatiSott=false;

var codiceSocietaMappa = { 
		//'descCodSoc':{'newCodSoc':'valoreNuova','oldCodSoc':'valoreNuovo'}
		
		'FIL_Inv_Mgmt_Lux_SA':			{'newCodSoc':'90002', 'oldCodSoc':'155'}
		,'Anima_Asset_Management_Ltd':	{'newCodSoc':'144', 'oldCodSoc':'144'}
		,'JPMorgan_Funds':				{'newCodSoc':'200', 'oldCodSoc':'111'}
		,'JPI_Funds':					{'newCodSoc':'222', 'oldCodSoc':'117'}
		,'Carmignac_Gestione_SA':		{'newCodSoc':'125', 'oldCodSoc':'125'}
		,'Etica_Sgr_Spa':				{'newCodSoc':'777', 'oldCodSoc':'6'}	
		,'Carmignac_Gest_Luxemb_SA':	{'newCodSoc':'126', 'oldCodSoc':'126'}	
		,'Eurizon_Capital_Sgr':			{'newCodSoc':'300', 'oldCodSoc':'4'}
		,'Epsilon_Associati_Sgr_Spa':	{'newCodSoc':'666', 'oldCodSoc':'3'}
		,'Anima_Sgr_Spa':				{'newCodSoc':'888', 'oldCodSoc':'1'}
		,'Amundi_Funds':				{'newCodSoc':'7017','oldCodSoc':'178'}
		,'ThreadNeedle_Asset_Mgmt_Ltd':	{'newCodSoc':'114','oldCodSoc':'114'}
		,'Schroder_Inv_Mgmt':			{'newCodSoc':'902','oldCodSoc':'101'}
	}



	function apriNewDocumenti(tipoDocRequest) {
		
		$("form[name='formPdf'] input[name='tipoDocumento']").val(tipoDocRequest);
		$("form[name='formPdf']").attr("action",wrp_script + "/investimenti/ApriDocumenti.action?isPDF=true");
		$("form[name='formPdf']").submit();
		
	}

	function initializaBuyPacFromCartSelect(inputData){
       
		$.ajax({
			url: 		wrp_script_direct + "/investimenti/BuyPacFromCartSelectJson.action" + "?cf=" + Math.random(),
        	dataType: 	"json",
            data:  		inputData ,
            success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
            			var msg = "l'operazione di Acquisto per fondo selezionato non &egrave; possibile al momento";
            			if(200 == jqXHR.status){
            				buyFundSelectBeanJson = $.parseJSON(dataOutJSON.data.buyFundSelectBeanJson);
            				buyFundSelectRequestJson = $.parseJSON(dataOutJSON.data.buyFundSelectRequestJson);

            				/*
            				buyFundSelectBeanJson = {'requestParameters':{},'action':'success','errorMessage':'','fondosicav':'F','codiceComparto':'IT','nomeComparto':'Anima Italia A EUR','societaGestione':'Anima Sgr Spa','numeroContratto':null,'quote':null,'dataNAV':'2017-04-27','divisa':'EUR','controvalore':null,'codiceSocieta':1,'codiceFamiglia':'7','speseIngresso':'Gratis','speseUscita':'Zero','spesegestione':'2%','spesePac':'8 EUR Versamento iniziale PAC - 1,25 EUR rate successive','dirittiFissi':'4 EUR','categoriaFondo':'Azionari Italia','flagReinvestimento':null,'dataOdierna':'04/05/2017','cambio':null,'dataCambio':null,'tipoAzione':'-','depositoSelezionato':'NO','reinvestimento':'N','perScontoComm':'017','descrizionePeriodo':null,'enableBuyFund':true,'numeroBanca':19,'dirittiCedola':'zero','periodoCedola':'nessuno','obbligoCedola':'N','enableBuyNoEur':false,'scontoPac':'017','listaPiani':[{'id':'AW','numAnni':'1','decsrAnni':'1 anno','numRate':'12','descrRate':'1 anno','descrTotale':'1 anno','codicePiano':'0E','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'},{'id':'AW','numAnni':'5','decsrAnni':'5 anni','numRate':'60','descrRate':'5 anni','descrTotale':'5 anni','codicePiano':'0F','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'},{'id':'AW','numAnni':'10','decsrAnni':'10 anni','numRate':'120','descrRate':'10 anni','descrTotale':'10 anni','codicePiano':'1G','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'},{'id':'AW','numAnni':'15','decsrAnni':'15 anni','numRate':'180','descrRate':'15 anni','descrTotale':'15 anni','codicePiano':'1I','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'},{'id':'AW','numAnni':'20','decsrAnni':'20 anni','numRate':'240','descrRate':'20 anni','descrTotale':'20 anni','codicePiano':'2L','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'},{'id':'AW','numAnni':'30','decsrAnni':'30 anni','numRate':'360','descrRate':'30 anni','descrTotale':'30 anni','codicePiano':'3F','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'},{'id':'AW','numAnni':'40','decsrAnni':'40 anni','numRate':'500','descrRate':'40 anni','descrTotale':'40 anni','codicePiano':'5M','numRateIni':1,'impRataIni':50,'note':'L&#39;importo minimo di ciascun versamento &egrave; uguale o multiplo di 50 &euro;;','note_versamenti':'Numero di rate da versare subito','impRataSuc':50,'importoIniziale':50,'tipoPiano':'-','anticipoRate':'S'}],'listaPeriodi':[{'id_periodo':'M','numero_periodi':12,'descrizione_periodo':'Mensile','tipo_piano':null}],'listaDepositi':{'1099/638333/0':'1099/638333/0 C/C 01099 - 0000046810 - EUR'},'isotsuc':500.0,'isotmin':500.0,'iresmin':0.0,'pac':'S','codisin':'IT0001040051','nav':20.512,'irimmin':100.0,'depositiConnAss':[],'parametersString':''};
            				buyFundSelectRequestJson = {"noteComm":{"notaSpeseIngresso":null,"notaSpeseIngressoDa":null,"notaSpeseIngressoA":null,"isNotaSpeseIngresso":false,"notaSpeseGestione":null,"notaSpeseGestioneDa":null,"notaSpeseGestioneA":null,"isNotaSpeseGestione":false,"notaSpeseUscita":null,"notaSpeseUscitaDa":null,"notaSpeseUscitaA":null,"isNotaSpeseUscita":false,"notaSpese":null,"notaSpeseDa":null,"notaSpeseA":null,"isNotaSpese":false,"notaSpeseSwitch":null,"notaSpeseSwitchDa":null,"notaSpeseSwitchA":null,"isNotaSpeseSwitch":false,"notaRimborso":null,"notaRimborsoDa":null,"notaRimborsoA":null,"isNotaRimborso":false,"notaPac":null,"notaPacDa":null,"notaPacA":null,"isNotaPac":false,"notaCedola":null,"notaCedolaDa":null,"notaCedolaA":null,"isNotaCedola":false}
            												,"idDocPolizza":"10091","idTypeProspetto":"17","idDocSintesi":"10092","idDocPrivacy":"10092","idTypePrivacy":"17","privacyAnchor":"EURIZON_PRIVACY"};
            				 */
//            				buyFundSelectRequestJson = {"noteComm":{"notaSpeseIngresso":null,"notaSpeseIngressoDa":null,"notaSpeseIngressoA":null,"isNotaSpeseIngresso":false,"notaSpeseGestione":null,"notaSpeseGestioneDa":null,"notaSpeseGestioneA":null,"isNotaSpeseGestione":false,"notaSpeseUscita":null,"notaSpeseUscitaDa":null,"notaSpeseUscitaA":null,"isNotaSpeseUscita":false,"notaSpese":null,"notaSpeseDa":null,"notaSpeseA":null,"isNotaSpese":false,"notaSpeseSwitch":null,"notaSpeseSwitchDa":null,"notaSpeseSwitchA":null,"isNotaSpeseSwitch":false,"notaRimborso":null,"notaRimborsoDa":null,"notaRimborsoA":null,"isNotaRimborso":false,"notaPac":null,"notaPacDa":null,"notaPacA":null,"isNotaPac":false,"notaCedola":null,"notaCedolaDa":null,"notaCedolaA":null,"isNotaCedola":false}
//							,"idDocPolizza":"10091","idTypeProspetto":"17","idDocSintesi":"10092","idDocPrivacy":"10092","idTypePrivacy":"17","privacyAnchor":"EURIZON_PRIVACY"};
//							buyFundSelectBeanJson.listaDepositi = {'1099/638333/0':'1099/638333/0 C/C 01099 - 0000046810 - EUR', '1099/638333/1':'1099/638333/1 C/C 01099 - 0000046810 - EUR'};
//							buyFundSelectBeanJson.codiceSocieta = "4";	//polizzaPac

            				if("warning" == buyFundSelectBeanJson.action){
            					showError(true,"E",buyFundSelectBeanJson.errorMessage);
            					$("#sezioneReipilogo,#sezioneDatiOrdine,#prosegui").hide();
            				}
            				else if("failure" == buyFundSelectBeanJson.action){
            					$("#sezioneReipilogo,#sezioneDatiOrdine,#prosegui").hide();
//            					showError(true,"E",buyFundSelectBeanJson.errorMessage);
            					showError(true,"E",msg);
            				}
            				else{
	            				showError(false,null,null);
	            				
	            				buyFundSelectBeanJson.fondiSicavDesc = ("F" == buyFundSelectBeanJson.fondosicav)? "Fondo" : 
				 					   								   ("S" == buyFundSelectBeanJson.fondosicav) ?  "Sicav" : "";
								buyFundSelectBeanJson.dataNavDesc = $.datepicker.formatDate('dd/mm/yy', new Date(buyFundSelectBeanJson.dataNAV)); 	
								buyFundSelectBeanJson.navDesc = buyFundSelectBeanJson.nav.toLocaleString().split('.')[0].replace(/,/g,'.') + ',' + buyFundSelectBeanJson.nav.toFixed(2).split('.')[1];
								fundJson = $.parseJSON(buyFundSelectRequestJson.fund);
								
								listaDepPIR 	= $.parseJSON(dataOutJSON.data.listaDepPIR);
								erroreDepPIR 	= dataOutJSON.data.erroreDepPIR;
								startLoad();
            				}
            			}
            			else{
            				var msg = "l'operazione di Acquisto per fondo selezionato non &egrave; possibile al momento";
            				showError(true,"E",msg);
            				$("#sezioneReipilogo,#sezioneDatiOrdine,#prosegui").hide();
            			}
            },
            error: function (jqXHR, status, errorThrown) {
            			var msg = "l'operazione di Acquisto per fondo selezionato non &egrave; possibile al momento";
                        showError(true,"E",msg);
               	        $("#sezioneReipilogo,#sezioneDatiOrdine,#prosegui").hide();
            },
            complete: function(){ 
//            			startLoad();
            			$("#buyFundForm").removeClass("loading");
            			/*setTimeout(function(){$("#buyFundForm").removeClass("loading");}, 10000);*/
            }
		});
		
	}

	function startLoad(){

		$('#erroreForm').hide();	//nasconde sezione di errore
		$('#datiRiepilogo').text($('#datiRiepilogo').text() + ' ' + buyFundSelectBeanJson.fondiSicavDesc);
		popolaReipilogoDati(buyFundSelectBeanJson); 
		
		//solo in sezione di prima visualizza
		if(buyFundSelectRequestJson.noteComm != undefined){
			conditionalTooltip(buyFundSelectRequestJson.noteComm.notaSpeseIngressoDa, buyFundSelectRequestJson.noteComm.notaSpeseIngressoA, '#commIngresso', buyFundSelectRequestJson.noteComm.notaSpeseIngresso);
			conditionalTooltip(buyFundSelectRequestJson.noteComm.notaSpeseGestioneDa, buyFundSelectRequestJson.noteComm.notaSpeseGestioneA, '#commGestione', buyFundSelectRequestJson.noteComm.notaSpeseGestione);
		}
		else{
			removeTooltip('#commIngresso');
			removeTooltip('#commGestione');
		}
		
		popolaDettDestProventi(buyFundSelectBeanJson);
		popolaDepositiMargine(buyFundSelectBeanJson);
		
		removeTooltip('#modInvestimentoTxt');
		$('#isNotPac').show();
		
//		if('S' == buyFundSelectBeanJson.pac){
//			var modInvestimentoTooltip = "<b>Pic</b>. E' la sigla di Piano di investimento di capitale. Con questa opzione acquisti quote di un fondo o azioni di una sicav in <b>un'unica soluzione</b>.<BR/><b>Pac</b>. E' la sigla di Piano di accumulo del capitale. Investi nel fondo o nella sciav tramite <b>versamenti periodici</b>, anche di piccoli importi.";
//			addTooltip('#modInvestimentoTxt',modInvestimentoTooltip);
//			$('#radiobuttonPic').prop('checked', true);
//		}
//		else{
//			removeTooltip('#modInvestimentoTxt');
//			$('#isPac').hide();
//			$('#isNotPac').show();
//		}
		
		//Importo senza decimale e valore negativi
//		$('#importoPic').bind('keydown', function(e){
//			verificaImporto(e);
//		});
		
		//check - $fromCart  117->222 111->200
//		if(	(codiceSocietaMappa.JPMorgan_Funds.newCodSoc		== buyFundSelectBeanJson.codiceSocieta || 
//			 codiceSocietaMappa.JPI_Funds.newCodSoc 	 		== buyFundSelectBeanJson.codiceSocieta || 
//			 codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta) 
//				&& buyFundSelectBeanJson.divisa != "EUR")
//		{
//			$("#importoPicDivisa").text(buyFundSelectBeanJson.divisa);
//			$("#importoPicDivisa").val(buyFundSelectBeanJson.divisa);
//			var divisaTooltip="Per garantire l'accettazione dell'ordine entro i minimi di sottoscrizione e dei diritti fissi previsti, &egrave; stato adottato un cambio conservativo al fine di tener conto di eventuali oscillazioni del cambio stesso";
//			addTooltip("#importoPicTxt",divisaTooltip);
//			
//			$('#importoPic').bind('keyup change', function(){
//				calcoloImportoDivisa();
//			});
//		}
//		else{
//			$("#importoPicDivisa").text('EUR');
//			removeTooltip("#importoPicTxt");
//		}
		
		if(codiceSocietaMappa.Anima_Asset_Management_Ltd.newCodSoc == buyFundSelectBeanJson.codiceSocieta && "x" == buyFundSelectBeanJson.codiceFamiglia){
			$("#cedolaSicavId").show();
			$("#cedolaSicavRadioId").show();
		}
		
		if(codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta){
			$("#esenzioneDivId").show();
		}

		
		
		$('#polizza').val('');
		$('#controlloFatca').val('false');
		$('#docSintColl').attr('disabled','disabled');
		$('#docdatiPers').attr('disabled','disabled');
		
		$("#bloccoPac").show();
		abilitaPac();
		
		
		$('#indietro').click(function() {
			var conto = $('#deposito').val();
			var hrefSimCartPAC = "javascript:document.location.href=";
			hrefSimCartPAC += "wrp_script";
			hrefSimCartPAC += "+'/wbOnetoone/2l/action/investimenti/SimCartPAC.action";
			hrefSimCartPAC += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore";
			hrefSimCartPAC += "&conto="+conto+"'";
			$("#indietro").attr("href",hrefSimCartPAC);
		});
		
		
		$('#prosegui').click(function() {
			//check - if($bean.getCodiceSocieta()==4) non deve fare nulla ??
			$('#datiOrdineOutput').show();
			$('#buyFundForm').addClass("loading"); //$('#datiOrdineOutput').addClass("loading");
			$('#prosegui').attr('disabled','disabled');
			
			var errors = [], 
				radioPolizza= $("#noPolizza"), 
				chkBoxSintColl = $("#docSintColl"), 
				chkBoxDatiPersonali = $("#docdatiPers");
			
			if($('#polizzaPac').is(':visible')){ 
				if($('#promoEurizonFormBottom').is(':hidden')){ 
					errors.push({ field: radioPolizza, text: "Per proseguire devi indicare una scelta" });
					setHasErrors(errors, "#formEurizonPromo1");
				}
				else{
					if (!chkBoxSintColl.is(':checked')) {  
                        errors.push({ field: chkBoxSintColl, text: "Per aderire devi confermare la presa visione e accettazione" });
           			 }
            
            		if (!chkBoxDatiPersonali.is(':checked')) {
                        errors.push({ field: chkBoxDatiPersonali, text: "Per aderire devi dare il consenso" });
            		}
            		setHasErrors(errors, "#formEurizonPromo");
				}
			}
			if (errors.length) {
					$('#datiOrdineOutput').hide();
					$('#prosegui').removeAttr('disabled');
					$(errors[0].field).trigger('focus');
			}
			else{
				$('#reinvestimentoSicav').val(buyFundSelectBeanJson.reinvestimento);
				
				if($('#esenzioneDivId').is(':visible')){
					if($("#esenzione").is(':checked')){
						$('#esenzioneEtica').val('S');
					}
					else{
						$('#esenzioneEtica').val('N');
					}
					buyFundSelectBeanJson.perScontoComm = 0;
				}
				prosegui();
			}
			
			$('#datiOrdineOutput').hide();
			setTimeout(function(){$('#buyFundForm').removeClass("loading");}, 1000);
			
			return (!errors.length);
			
		});
		
//		$('#modifica').click(function() {
//			if($('#reinvestimentoOut').is(':visible')){
//				$('#reinvestimentoOut').toggle();
//			}
//			if($('#sezioneFatca').is(':visible')){
//				$('#sezioneFatca').toggle();
//			}
//			$('#prosegui').removeAttr('disabled');
//			proseguiModificaToggle();
//		});
		
		
		$('#noPolizza').click(function() {
			$(this).prop('checked', false);
			$("#promoEurizonFormBottom").hide();
			$("#polizzaPac").hide();
			$('#polizza').val('N');
			resetHasErrors("#formEurizonPromo");
			resetHasErrors("#formEurizonPromo1");
		});
		
		$('#siPolizza').click(function() {
			$("#promoEurizonFormBottom").show();
			$('#polizza').val('S');
			resetHasErrors("#formEurizonPromo");
			resetHasErrors("#formEurizonPromo1");
			
			if(! $('#docSintColl').is(':checked')){
				addTxtTooltip('#checkFirst',"Prima di procerdere occorre prendere visione obbligatoria del Documento di Sintesi della polizza, aprendo il relativo pdf, salvandolo e/o stampandolo per poterlo conservare.");
			}
		
			if(! $('#docdatiPers').is(':checked')){
				addTxtTooltip('#checkSecond',"Prima di procerdere occorre prendere visione obbligatoria del Consenso Privacy, salvandolo e/o stampandolo per poterlo conservare.");
			}
		});
		
		//una volta selezionata la presa visione disabilito l'input
		$('#docSintColl, #docdatiPers').click(function() {
			if($(this).is(':checked')){   
				$(this).attr('disabled','disabled');
			}
		});
		
		$('#linkPolAssicDoc').click(function() {
			if( buyFundSelectRequestJson.idDocPolizza != undefined && buyFundSelectRequestJson.idDocPolizza != '' && 
				buyFundSelectRequestJson.idTypeProspetto != undefined && buyFundSelectRequestJson.idTypeProspetto != ''){
					open(wrp_script + "/common/apriDocumento.action?id=" + buyFundSelectRequestJson.idDocPolizza + "&prodotto=" + buyFundSelectRequestJson.idTypeProspetto + "&isPDF=true");
			}
			else{
				showError(true,"W","Documento non esiste");
			}
		});
		
		$('#linkPolSinDoc').click(function() {
			if(! $('#docSintColl').is(':checked')){
				 $('#docSintColl').removeAttr('disabled');
				 resetErrors('#docSintColl');		// check
				 removeTxtTooltip('#checkFirst');
			}
			open(wrp_script + "/common/apriDocumento.action?id=" + buyFundSelectRequestJson.idDocSintesi + "&prodotto=" + buyFundSelectRequestJson.idTypeProspetto + "&isPDF=true");
      	});
		
		$('#linkPolPrivDoc').click(function() {
			if(! $('#docdatiPers').is(':checked')){
				 $('#docdatiPers').removeAttr('disabled');
				 resetErrors('#docdatiPers');
				 removeTxtTooltip('#checkSecond');
			}
			// check : stesso doc di sintesi - solo ancor a ultima pagina 
			open(wrp_script + "/common/apriDocumento.action?id=" + buyFundSelectRequestJson.idDocPrivacy + "&prodotto=" + buyFundSelectRequestJson.idTypePrivacy + "&anchor=" + buyFundSelectRequestJson.privacyAnchor+ "&isPDF=true");
  		});
		
		$('#linkDocFatca').click(function() {
			if(! $('#checkDocFatca').is(':checked')){
				 $('#checkDocFatca').removeAttr('disabled');
				 resetErrors('#checkDocFatca');
			}
			open(wrp_script + "/common/apriDocumento.action?id=" + buyFundPreviewRequestJson.idDocFacta + "&prodotto=" + buyFundPreviewRequestJson.idTypeFacta + "&isPDF=true");
  		});
		
		
		$('#confermaFatca').click(function() {
			var errors 			= [], 
				chkBoxDocFatca 	= $("#checkDocFatca"), 
				chkBoxDatiFatca = $("#checkDatiFatca")
				;
			
			if (! chkBoxDocFatca.is(':checked')) {  
                errors.push({ field: chkBoxDocFatca, text: "Prendi visione dell'informativa FATCA aprendo il relativo pdf." });
                setHasErrors(errors, "#sezioneFatca");
			}
			if (! chkBoxDatiFatca.is(':checked')) {  
                errors.push({ field: chkBoxDatiFatca, text: "Conferma le dichiarazioni rilasciate." });
                setHasErrors(errors, "#sezioneFatca");
			}
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			else{
				chiamataFatca();
//				if("OK" == buyFundPreviewRequestJson.FactaKO){
//					prosegui();
//				}
			}
			
			return (!errors.length);
		});
		
		$('#confermaAdeVer').click(function() {
			var errors = erroriAdever();
			
			if (errors.length) {
				setHasErrors(errors, "#sezioneAdeVer");
				$(errors[0].field).trigger('focus');
			} else {
				chiamataAdeVer();
			}

			return (!errors.length);
		});
		
		//PREVIEW
		$('#linkDocCostiOneriIncentInv').click(function() {
					//IE non scarica PDF perche GET has variabile con lunghezza troppo alta
					var mapForm    = document.createElement("form");
					mapForm.id	   = "frmPdfMifidInv";
					mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
					mapForm.target = "Map";
					mapForm.method = "POST"; // or "post" if appropriate
					mapForm.action = wrp_script + "/investimenti/PdfMifid2CostiInducement.action";

					var mapInput = document.createElement("input");
					mapInput.type = "text";
					mapInput.name = "dMifid";
					mapInput.value = datiMifidPdfInv;
					var mapInput2 = document.createElement("input");
					mapInput2.type = "text";
					mapInput2.name = "isPDF";
					mapInput2.value = "true";
					mapForm.appendChild(mapInput);
					mapForm.appendChild(mapInput2);

					document.body.appendChild(mapForm);
					mapForm.submit();
					$("#frmPdfMifidInv").remove();	//apertura di PDF ogni volta aggiunge il form nel footer
//					open(wrp_script + "/investimenti/PdfMifid2CostiInducement.action?dMifid="+ datiMifidPdfInv + "&isPDF=true");
				});
		
		//var conferma = "OK";
		$('#conferma').click(function() {					//$( "#buyFundForm" ).submit(function( event ) {
		
			var errors = [], 
				chkBoxAvvertenze 		= $("#checkAvvertenze"), 
				chkBoxIncentivi 		= $("#checkIncentivi"),
				chkBoxProspetto 		= $("#checkProspetto"),
				radioPrivacyNo 			= $("#flagPrivacyNo"),
				chkBoxDichConferma 		= $("#flgDichiarazioni"),
				flagReinveastimentoNo 	= $("#flagReinveastimentoNo"),
				flagReinveastimentoSi 	= $("#flagReinveastimentoSi")
				;
			
			if ($('#sezionePir').is(':visible')) {
				if (!$("#checkboxPir").is(':checked')) {
					errors.push({
								field : $("#checkboxPir"),
								text : "Per proseguire occorre dichiarare di non essere titolare di altri fondi PIR"
							});
					setHasErrors(errors, "#sezionePir");
				}
			}
			
			if($('#idInducement').is(':visible')){
				if (! chkBoxIncentivi.is(':checked')) {  
                    errors.push({ field: chkBoxIncentivi, text: "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi" });
                    setHasErrors(errors, "#idInducement");
                    //conferma = "KO";
                    if($("#sezioneCostiInducementInv").find(".panel-collapse.collapse.in").length==0) {
						$("#sezioneCostiInducementInv i").first(".icon .icon-arrow_down").trigger("click");
					}
                    
				}
			}
			
			if($('#idAvvertenze').is(':visible')){
				if (! chkBoxAvvertenze.is(':checked')) {  
                    errors.push({ field: chkBoxAvvertenze, text: "Per proseguire occorre dichiarare di aver preso visione delle informazioni relative alla Liquidit&agrave; e conflitto di interessi" });
                    setHasErrors(errors, "#idAvvertenze");
                    //conferma = "KO";
				}
			}
						
			
			//check sorifinsel : operazione supera i 5000 Euro ... antiriciclaggio (FATCA CRS)
			//if("S" != buyFundSelectBeanJson.reinvestimento){ //check SelectBean o Previewbean ?
			//	 conferma = "OK";
			//}
			//else{} // check flagReinv obbligoCedola 
			if(stringa_S == buyFundSelectBeanJson.reinvestimento){
				if ("" == buyFundPreviewBeanJson.flagReinvestimento) {
					if(stringa_S == buyFundSelectBeanJson.obbligoCedola){
						if(! flagReinveastimentoNo.is(':checked')){
							 errors.push({ field: flagReinveastimentoNo, text: "Per proseguire occorre dichiarare la destinazione dei proventi" });
							 setHasErrors(errors, "#flgReinvId");
						}
					}
					else if(stringa_N == buyFundSelectBeanJson.obbligoCedola){
						if(! flagReinveastimentoNo.is(':checked') && ! flagReinveastimentoSi.is(':checked')){
							 errors.push({ field: flagReinveastimentoNo, text: "Per proseguire occorre dichiarare la destinazione dei proventi" });
							 setHasErrors(errors, "#flgReinvId");
						}
					}
				}
			}	
			
			if(! chkBoxProspetto.is(':disabled')){
				errors.push({ field: chkBoxProspetto, text: "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo" }); // check : per sicav si chiama prospetto inf .. per fondo si chiama doc obb
				setHasErrors(errors, "#idDocumentazione");
				//conferma = "KO";
			}
			
			if(! chkBoxProspetto.is(':checked')){
				 errors.push({ field: chkBoxProspetto, text: "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa" });
				 setHasErrors(errors, "#idDocumentazione");
				 //conferma = "KO";
			}
			
			if($('#idConsensoDatiPersonali').is(':visible')){
				if(! $('#flagPrivacySi').is(':checked') && ! $('#flagPrivacyNo').is(':checked')) {
					errors.push({ field: radioPrivacyNo, text: "Per proseguire occorre dichiarare di dare o meno il consenso al trattamento dei dati personali" });
					setHasErrors(errors, "#idConsensoDatiPersonali");
					//conferma = "KO";
				}
			}
//			
//			if($('#idSezioneDichiarazioni').is(':visible')){
//				if(! chkBoxDichConferma.is(':checked')){
//					errors.push({ field: chkBoxDichConferma, text: "Per proseguire occorre dichiarare di avere preso visione delle dichiarazioni di conferme" }); // check : per sicav si chiama prospetto inf .. per fondo si chiama doc obb
//					setHasErrors(errors, "#idSezioneDichiarazioni");
//					//conferma = "KO";
//				}
//			}
			
			var checkLimitazioni = $("input[name=checkLimitazioni]");
			if(!checkLimitazioni.is(':checked')) {
				errors.push({
					field : checkLimitazioni.parent().parent().parent(),
					text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
				});
				setHasErrors(errors, checkLimitazioni.parent().parent().parent());
				
			}
			
			var checkMandatoSIP = $("input[name=checkMandatoSIP]");
			if(!checkMandatoSIP.is(':checked')) {
				errors.push({
					field : checkMandatoSIP.parent().parent().parent(),
					text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
				});
				setHasErrors(errors, checkMandatoSIP.parent().parent().parent());
				
			}
			
			var checkPrivacyOICVM = $("input[name=checkPrivacyOICVM]");
			if(!checkPrivacyOICVM.is(':checked')) {
				errors.push({
					field : checkPrivacyOICVM.parent().parent().parent(),
					text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
				});
				setHasErrors(errors, checkPrivacyOICVM.parent().parent().parent());
				
			}						
			
			
			
			
			if (errors.length) {
				$("html, body").animate({ scrollTop: errors[0].field.offset().top }, "fast");
			}
			else{
				conferma();
			}
			
			return (!errors.length);
			
		});
	}
	
	function chiamataFatca(){
		//controlli se campi sono valorizzati al base di numero interstatari
		//controlloFactaRcs o controlloFacta
		
		var objDatiFatcaJsonArray = {};
		//	datiFatca =tin + "/" + codNaz + "/" +numTin + "/"+ndg +"/" + stato +"/" + indirizzo + "/" + provincia + "/" + comune +"/" + cap;	
		if(buyFundPreviewRequestJson!=undefined && buyFundPreviewRequestJson.listaIntestatariFatca!=undefined){
			for(var j=0; j<buyFundPreviewRequestJson.listaIntestatariFatca.length; j++){
				var datiFatcaJsonArray = [];
				if(undefined == $("#tinLayer") || undefined == $("#tinLayer").val() ){
					for(var i=2,idx=0 ; i<=4 ; i++, idx++) {
						var idTin = "TIN"+i+"_int1_"+j;
						var idRes = "residenzaFiscale"+i+"_int1_"+j;
						if( $('#' + idRes).val() != undefined && $('#' + idRes).val() != '')
						{
							var valoreRes = $('#' + idRes).val();
							var valoreResArray = $('#' + idRes).val().split("|");
							datiFatcaJsonArray[idx] = {  codNazione 	: valoreResArray[0]
											  			,descNazione 	: valoreResArray[1]
											  			,flagCadTin		: valoreResArray[2]
											  			,tin			: $('#' + idTin).val()
											 		};
						}
					}
				}
				else{
					datiFatcaJsonArray[0] = { codiceUIC : $("#nazioneFiscaleLayer").val() 
											  ,tin 	    : $("#tinLayer").val()
								  			};
				}
				
				objDatiFatcaJsonArray[j] = datiFatcaJsonArray;
				
			}
		}
			
		var tipoInvestimento = 'PAC';

		$.ajax({
			url: wrp_script_direct + "/investimenti/VerificaFatca.action" + "?cf=" + Math.random(),
        	dataType: "json",
            data: {'datiFatcaJsonArray' 	: JSON.stringify(objDatiFatcaJsonArray)	//datiFatcaJsonArray
            	  ,'codiceFondo'			: buyFundSelectBeanJson.codiceComparto
            	  ,'codiceSocietaDiGestione': buyFundSelectBeanJson.codiceSocieta
            	  ,'deposito'				: $('#deposito').val()
            	  ,'fondosicav'				: buyFundSelectBeanJson.fondosicav 
            	  ,'tipoInvestimento'		: tipoInvestimento
            	 },
            
            success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
            			var msg = "Si &egrave; verificato un errore di connessione";
            			if(200 == jqXHR.status){
            				buyFundPreviewFatcaRequestJson = $.parseJSON(dataOutJSON.data.buyFundPreviewFatcaRequestJson);
            				if(buyFundPreviewFatcaRequestJson == undefined || buyFundPreviewFatcaRequestJson == null || buyFundPreviewFatcaRequestJson == ""){
            					showError(true,"E",buyFundPreviewFatcaRequestJson.errorMessage);
            				}
            				else if("failure" == buyFundPreviewFatcaRequestJson.action){
            					showError(true,"E",buyFundPreviewFatcaRequestJson.errorMessage);
            				}
            				else{
            					showError(false,null,null);
            					buyFundPreviewRequestJson.FactaKO = buyFundPreviewFatcaRequestJson.FactaKO ;
            					prosegui();
            				}
            			}
            			else{
            				showError(true,"E",msg);
            				
            			}
            },
            error: function (jqXHR, status, errorThrown) {
            			var msg = "Si &egrave; verificato un errore di connessione";
               	        showError(true,"E",msg);
               	       
            }
//            ,complete: function (jqXHR, status){ 
//		            	if("success" == status){
//		            	}
//            }
		});
	}

	function salvaDatiAdeVer(){
		datiAdeVer = {};
		datiAdeVer.usoConto = $('#usoConto').val();
		datiAdeVer.numint 	= $('#numint').val();
		
		if(datiAdeVer.numint!=undefined && datiAdeVer.numint!=null && datiAdeVer.numint!= ""){
			var elencoInt = {}, datiInt = {}, nome_cognome = '';
			for(var idx=0; idx<datiAdeVer.numint; idx++){
				nome_cognome = $('#nomecognome' + (idx+1)).val().replace(/ /g,"_");
				datiInt = {};
				datiInt.professioneAv 		=  $('#professioneAv' 				+'_int' + (idx+1)).val();
				datiInt.cittadinanza2Av		=  $('#cittadinanza2Av' 			+'_int' + (idx+1)).val();
				datiInt.dettaglioSettoreAv 	=  $('#dettaglioSettoreAv' 			+'_int' + (idx+1)).val();
				datiInt.statoAttivitaAv 	=  $('#statoAttivitaAv' 			+'_int' + (idx+1)).val();
				datiInt.provinciaAttivitaAv =  $('#provinciaAttivitaAv' 		+'_int'	+ (idx+1)).val();
				datiInt.redditoAnnuoAv 		=  $('#redditoAnnuoAv' 				+'_int' + (idx+1)).val();
				datiInt.origineRedditoAv	=  $('#origineRedditoAv' 			+'_int' + (idx+1)).val();
				datiInt.originePatrimonioAv	=  $('#originePatrimonioAv' 		+'_int' + (idx+1)).val();
				datiInt.politicEspostaAv	=  $('input[name=politicEspostaAv' 	+'_int' + (idx+1) + ']:checked').val();
				//TODO - StringEscapeUtils
				elencoInt[nome_cognome] 	= datiInt;
			}
			datiAdeVer.elencoInt	= elencoInt;
		}
		datiAdeVer.deposito 	= $('#deposito').val();
	}

	//Chiamata da adever.js
	function impostaValoriSelect() {
		
			salvaDatiAdeVer();
			
			//visualizza errore nel select senza valore e nasconde errore nel select con valore
			if(datiAdeVer.numint!=undefined && datiAdeVer.numint!=null && datiAdeVer.numint!= ""){
				var nome_cognome = '';
				for(var idx=0; idx<datiAdeVer.numint; idx++){
					resetAdeverError('#professioneAv'   	 +'_int'	+ (idx+1));
					resetAdeverError('#dettaglioSettoreAv'   +'_int'	+ (idx+1));
					resetAdeverError('#cittadinanza2Av'   	 +'_int'	+ (idx+1));
					resetAdeverError('#redditoAnnuoAv'   	 +'_int'	+ (idx+1));
					resetAdeverError('#originePatrimonioAv'  +'_int'	+ (idx+1));
					resetAdeverError('#origineRedditoAv'   	 +'_int'	+ (idx+1));
					resetAdeverError('input[name=politicEspostaAv'   	 +'_int'	+ (idx+1) + ']');
					resetAdeverError('#statoAttivitaAv'   	 +'_int'	+ (idx+1));
					resetAdeverError('#provinciaAttivitaAv'  +'_int'	+ (idx+1));
					
					//default stato=Italia
					nome_cognome = $('#nomecognome' + (idx+1)).val().replace(/ /g,"_");
					impostaValoreSelect('statoAttivitaAv'    +'_int' 	+ (idx+1), '86|ITALIA');
					AdeVer.populateSelectWithValue(methodAdeVer, 'COUNTRY', 'statoAttivitaAv'  +'_int'+(idx+1), 'provinciaAttivitaAv'  +'_int'+(idx+1), '86|ITALIA', datiAdeVer.elencoInt[nome_cognome].provinciaAttivitaAv);
				
				}
				resetAdeverError('#usoConto');
			}
			
			$('#sezioneAdeVer').removeClass("loading");
			
	}


	function chiamataAdeVer() {
		salvaDatiAdeVer();
		$.ajax({
			url : wrp_script_direct + "/investimenti/VerificaAdeVer.action" + "?cf=" + Math.random(),
			dataType : "json",
			data : { 'datiAdeVer' : JSON.stringify(datiAdeVer),
					'deposito' 	 : $('#deposito').val(),
					'fondosicav' : buyFundSelectBeanJson.fondosicav},
			success : function(dataOutJSON, status, jqXHR) { 
				var msg = "Si &egrave; verificato un errore di connessione";
				if (200 == jqXHR.status && dataOutJSON.action!= undefined) {

					if ("failure" == dataOutJSON.action) {
						if(dataOutJSON.msg !=undefined && stringa_N == dataOutJSON.msg){
							showError(true, "E", dataOutJSON.errorCode + ":" + dataOutJSON.errorMsg);
						}
						else if(dataOutJSON.errorMessage !=undefined && "" != dataOutJSON.errorMessage){
							showError(true, "E", dataOutJSON.errorMessage);
						}
						else{
							showError(true, "E", msg);
						}
					} 
					else {
						if("SUCCESS" == dataOutJSON.action && dataOutJSON.msg !=undefined && "Y" == dataOutJSON.msg){ 
							showError(false, null, null);
							$('#sezioneAdeVer').toggle();
							proseguiModificaToggle();
							prosegui();
						}
						else{
							showError(true, "E", msg);
						}
					}
				} else {
					showError(true, "E", msg);

				}
			},
			error : function(jqXHR, status, errorThrown) {
				var msg = "Si &egrave; verificato un errore di connessione";
				showError(true, "E", msg);

			}
		});
	}

	function resetAdeverError(idSelect){
		if(idSelect.indexOf('#')>-1){ 		//select
			$(idSelect).change(function() {
				if($(idSelect).val()!="-" || true == $(idSelect).is(':disabled')){
		//			resetHasErrors($(idSelect).parent().parent());
					var wrapper = $(idSelect).parent();
				    wrapper.removeClass("has-error");
				    wrapper.find(".help-block.with-errors").remove();
				    
				    //Cambia professione, canncella errore evidenziato per tutti (serve se Pensionato/Non occupato da cancellare errori sul settore, prov e origine reddito)
				    if(idSelect.indexOf("#professioneAv") == 0){
						var idPannelloInt =  "#pannelloAdvSogg" + idSelect.substring("#professioneAv".length) ;
						$(idPannelloInt + " .has-error").removeClass("has-error");
						$(idPannelloInt + " .help-block.with-errors").remove();
					}
				}
				else{
					var errors = [];
				    errors.push({
				        field : $(idSelect + '_label'),
				        text : getMsgErroreVuoto('')
				    });
					setHasErrors(errors, $(idSelect).parent());
				}
			});
		}
		else{	//radio
			$(idSelect).click(function() {
				if($(idSelect)[0].checked || $(idSelect)[1].checked){
					var wrapper = $(idSelect).parent().parent().parent().parent().parent();
				    wrapper.removeClass("has-error");
				    wrapper.find(".help-block.with-errors").remove();
				}
				else{
					var errors = [];
				    errors.push({
				        field : $(idSelect + '_label'),
				        text : getMsgErroreVuoto('')
				    });
					setHasErrors(errors, $(idSelect).parent().parent().parent().parent().parent());
				}
			});
		}
	}
	
	
	
	function requestMargine(deposito, showEsito){
		
		//MargUtilFinanceAction
		var msg = "Disponibilita attuale non disponibile";
		var margineVal = 'Dato non disponibile';
		$.ajax({
				url: wrp_script_direct + "/investimenti/MargUtilFinanceJson.action" + "?cf=" + Math.random(),
            	dataType: "json",
	            data: {
	                   	deposito: deposito
	            },
	            success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
	            			if(200 == jqXHR.status){
	            				//alert(dataOutJSON.data.stato);
	            				margineVal = dataOutJSON.data.Margine;
	            				if("false" == showEsito){
	            					showError(false,null,null);
	            				}
	            				
	            				$('#margine').text(margineVal + ' EUR');
	            			}
	            			else{
	            				showError(true,"W",msg);
	            			}
	            },
	            error: function (jqXHR, status, errorThrown) {
	               	        showError(true,"W",msg);
	            }
		});
			
		$('#margine').text(margineVal);//check to comment
		
	}
	
	
	//Funzionalita simile per campi di importoMinIni e importoMinSuc
	function importoMin(jsonBean, idName, jsonField, percentageValue){
		if(jsonBean.enableBuyNoEur){
			$(idName).text(new Number(jsonField).valueOf() + ' ' + jsonBean.divisa);
		}
		else{
			//	
			if( (codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc == jsonBean.codiceSocieta 
				|| codiceSocietaMappa.Carmignac_Gest_Luxemb_SA.newCodSoc == jsonBean.codiceSocieta 
				|| codiceSocietaMappa.Amundi_Funds.newCodSoc == jsonBean.codiceSocieta) 
				&& jsonBean.iresmin > 0) {
				
				var numDirFissi = new Number(jsonBean.dirittiFissi.substring(0,2));
				var impSuc = jsonBean.nav * percentageValue/100;
				var impSucFin = Math.ceil(impSuc) + numDirFissi;
				
				if (jsonBean.divisa!='EUR' && idName=='#importoMinIni') {
					impSucFin += Math.ceil(jsonBean.nav * 0.10);
				}
				
				$(idName).text(impSucFin + " EUR");
				
			}
			else{
				$(idName).text(new Number(jsonField).valueOf() + ' EUR');
			}
		}
	}
	
	function checkDate(dateTocheck, startDate, endDate){
		return (startDate!=null && endDate!=null && startDate<=dateTocheck && dateTocheck<=endDate);
	}

	function addTooltip(idLable, tooltip){
		//$(idLable).attr("class","control-label-output txthelp closeable");
		//$(idLable).attr("data-toggle","tooltip");
		$(idLable).attr("data-title", tooltip);
	}
	
	function conditionalTooltip(startDate, endDate, idLable, tooltip){
		if(tooltip){
			if(checkDate(new Date().getTime(), startDate, endDate)){
				addTooltip(idLable, tooltip);
			}
			else{
				removeTooltip(idLable);
			}
		}
		else{
			removeTooltip(idLable);
		}
	}
	
	
	function removeTooltip(idLable){
		//$(idLable).attr("class","control-label-output");
		$(idLable).removeClass("txthelp"); 
		$(idLable).removeClass("closeable");
		
		$(idLable).attr("data-toggle","");
		$(idLable).attr("data-title", '');
		$(idLable).off('click shown');
	}
	
	//nasconde/visualizza sezione di errore/warning/successo
	//show = true/false; tipo="E"(error)/"W"(warning)/"S"(success)
	function showError(show, tipo, msg){
		if(!show){
			$('#erroreForm').hide();
		}
		else{
			var errorBorderClass = ''
//				, errorIconType = ''
				;
			if("E" == tipo){
				errorBorderClass = 'negativo';
//				errorIconType    = 'icon icon-alert_error icon-2x';
			}
			else if("W" == tipo){
				errorBorderClass = 'attenzione';
//				errorIconType    = 'icon icon-alert_caution icon-2x';
			}
			$("#errorBorder").addClass(errorBorderClass);
//			$("#errorType").attr('class',errorIconType);
			$("#messaggio").html(msg);
			$('#erroreForm').show();
			window.scrollTo(0,0);
		}
	}

	function abilitaPac(){
		
		if(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta){
			$('#importoMinSuc').text(buyFundSelectBeanJson.iresmin); 
		}else{
			importoMin(buyFundSelectBeanJson,'#importoMinSuc',buyFundSelectBeanJson.isotsuc, buyFundSelectBeanJson.iresmin);
		}
		
		$('#dirFissi').text(buyFundSelectBeanJson.spesePac);
		$('#dirFissi').val(buyFundSelectBeanJson.spesePac);

		$('#selectPacOut').text(fundJson.acquisto.versamentiTotali + ' versamenti');
		$('#selectPacOut').val(fundJson.acquisto.versamentiTotali);
		
		$('#selectPeriodoOut').text(buyFundSelectRequestJson.descrizionePeriodo);
		$('#selectPeriodoOut').val(fundJson.acquisto.periodicita);
		
		caricaImporto();
		
		var idx = '';
		var periodicitaJson = fundJson.periodicita[$.trim(fundJson.acquisto.periodicita)];
		var numeroratepianoArray = periodicitaJson.numeroratepiano.split(",");
		$.each(numeroratepianoArray, function(index, value){
			if(value == fundJson.acquisto.versamentiTotali) {
				idx = index;
				return false;
			}
		});
		var pianoSel = buyFundSelectBeanJson.listaPiani[idx];
		addTooltip('#importoRataTxt', pianoSel.note);	
		addTooltip('#importoInizialeTxt',pianoSel.note_versamenti);	
		$("#anticipoRate").val(pianoSel.anticipoRate);
		
		if(codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta){
			$("#polizzaPac").show();
			
		}
	}
	
	function cambiaPiani(idSelect){ 
		var obj = {nota:"",notaVersamento:''};
		$("#selectPac").empty();
		
//		var codPianoValore = $(idSelect +' :selected').val();
		var periodo = $.parseJSON($(idSelect +' :selected').val());
		var codPianoValore = periodo.id_periodo;
		$.each(buyFundSelectBeanJson.listaPiani, function(index, piano){
			 var desc = piano.descrTotale;
//			 var value = ''+ piano.importoIniziale + '*' + piano.tipoPiano   + '*' + piano.impRataSuc + '*' + 
//			 				 piano.descrTotale     + '*' + piano.codicePiano + '*' + piano.numAnni + '*' + 
//			 				 piano.numRateIni      + '*' + piano.impRataIni  + '*' + piano.numRate;		
			 var pianoReduced = {'importoIniziale':	piano.importoIniziale
					 			 ,'tipoPiano'	  :	piano.tipoPiano
					 			 ,'impRataSuc'	  : piano.impRataSuc
					 			 ,'descrTotale'	  :	piano.descrTotale
					 			 ,'codicePiano'	  : piano.codicePiano
					 			 ,'numAnni'	  	  :	piano.numAnni
					 			 ,'numRateIni'	  : piano.numRateIni
					 			 ,'impRataIni'	  :	piano.impRataIni
					 			 ,'numRate'	  	  : piano.numRate
					 			 ,'anticipoRate'  : piano.anticipoRate
			 					};
			 
			 var value = JSON.stringify(pianoReduced);	//TODO - check if all values required
			 var codicePiano = piano.codicePiano;
			 var checkValore = '';
			 var addOption = false;
			 if("#selectPeriodo" == idSelect){
				 addOption = true;
				
			 
				 if(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta ){	//&& 19 == buyFundSelectBeanJson.numeroBanca
					 checkValore = codicePiano.slice(-1);
					 showNota(piano, checkValore, obj);
				 }
				 else if("S" == buyFundSelectBeanJson.fondosicav){
					 if(codiceSocietaMappa.Amundi_Funds.newCodSoc == buyFundSelectBeanJson.codiceSocieta){	//178->90017->7017
						 checkValore = codicePiano.substring(3,4);
					 }
					 else{
						 checkValore = codicePiano.substring(1,2);
					 }
					 showNota(piano, checkValore, obj);
				 
					 if(codiceSocietaMappa.ThreadNeedle_Asset_Mgmt_Ltd.newCodSoc != buyFundSelectBeanJson.codiceSocieta){
						 $("#sogliaImportoPacSicav").val(piano.importoIniziale);
					 }
					 else{
						 $("#sogliaImportoPacSicav").val("0");
					 }
				 }
				 else{
					 showNota(piano, "M", obj);
				 }
			 
			 }
			 else if("#selectPeriodoEpsilon" == idSelect){
				 if(codPianoValore == codicePiano){
					 addOption = true;
					 showNota(piano, "M", obj);
					 $("#sogliaImportoPacSicav").val(piano.importoIniziale);
				 }
			 }
			 else if("#selectPeriodoSicav" == idSelect){
				 if(codiceSocietaMappa.Amundi_Funds.newCodSoc == buyFundSelectBeanJson.codiceSocieta){	//178->90017->7017
					 checkValore = codicePiano.substring(3,4);
				 }
				 else{
					 checkValore = codicePiano.substring(1,2);
				 }
				 if(codPianoValore == checkValore){
					 addOption = true;
					 showNota(piano, "M", obj);
					 $("#sogliaImportoPacSicav").val(piano.numRate);
				 }
			 }
			 if(addOption){
				 $("#selectPac").append($('<option>').val(value).text(desc));
			 }
			 
		});
		
		var descPeriodoVal = '',
			descPeriodoTxt = '';
//		$("#descrizionePeriodo").val($("#selectPeriodoSicav :selected").val()); 
//		$("#descrizionePeriodo").text($("#selectPeriodoSicav :selected").text()); 
		
		if("#selectPeriodo" == idSelect){
			descPeriodoVal = $("#selectPeriodo :selected").val();
			descPeriodoTxt = $("#selectPeriodo :selected").text();
		}
		else if("#selectPeriodoEpsilon" == idSelect){
			descPeriodoVal = $("#selectPeriodoEpsilon :selected").val();
			descPeriodoTxt = $("#selectPeriodoEpsilon :selected").text();
		}
		else if("#selectPeriodoSicav" == idSelect){
			descPeriodoVal = $("#selectPeriodoSicav :selected").val();
			descPeriodoTxt = $("#selectPeriodoSicav :selected").text();
		}
		
		$("#descrizionePeriodo").val(descPeriodoVal);
		$("#descrizionePeriodo").text(descPeriodoTxt);
		
		addTooltip('#importoRataTxt', obj.nota);				//check - presente in ogni articolo nel elenco piano (quindi da aggiornare ogni volta che cambia select ?)
		addTooltip('#importoInizialeTxt',obj.notaVersamento);	//check - presente in ogni articolo nel elenco piano
		
	}
	
	function caricaImporto() {
		
		var periodicitaVal = $.trim(fundJson.acquisto.periodicita);
		var perImporto = 1 > fundJson.periodicita[periodicitaVal].numerorateiniziali;
		
		$("#spinnerRataOut").text(fundJson.acquisto.importorata + ' ' + fundJson.divisa);
		$("#spinnerRataOut").val(fundJson.acquisto.importorata);
		
		$("#spinnerInizialeOut").text(fundJson.acquisto.numerorateiniziali);
		$("#spinnerInizialeOut").val(fundJson.acquisto.numerorateiniziali);
		
		$("#investimentoIniziale").text(fundJson.acquisto.investimentoiniziale + ' EUR');
		$("#investimentoIniziale").val(fundJson.acquisto.investimentoiniziale);
		
		$("#investimentoTotale").text(fundJson.acquisto.investimentotale + ' EUR');
		$("#investimentoTotale").val(fundJson.acquisto.investimentotale);
		
		$("#sogliaImportoPacSicav").val(fundJson.periodicita[periodicitaVal].importoratainiziale);
		
		if( perImporto ) {
			$('#rateinvetimentoInit').hide();
			$('#totaleInvestimentoInit').removeClass("col-sm-6").addClass("col-sm-12");
		} 
		
		
//		$("#ratePac").val(numAnni);	//serve nel submit
		 
//		var pianoReduced = $.parseJSON($('#selectPac :selected').val());
//		var ratePac = pianoReduced.numRate;
//		$("#spinnerRata").val(pianoReduced.impRataIni);
//		$("#anniPac").val(pianoReduced.numAnni);
//		
//		if( codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc 		 == buyFundSelectBeanJson.codiceSocieta || 	
//			codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc 		 == buyFundSelectBeanJson.codiceSocieta ||
//			codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta)
//		{
//			var periodo = $.parseJSON($('#descrizionePeriodo').val());
//			ratePac = periodo.numero_periodi * pianoReduced.numAnni;
//			
//		}
//		$("#spinnerIniziale").val(pianoReduced.numRateIni);
//		
//		investimentoIniziale(pianoReduced.impRataIni,pianoReduced.numRateIni);
//   		investimentoTotale(pianoReduced.impRataIni,ratePac);
//   		
//   		if($('#radiobuttonPac').is(':checked')){
//   			var pianoReduced = $.parseJSON($('#selectPac :selected').val());
//   			if(stringa_N == pianoReduced.anticipoRate){
//   				$("#versamentiPacOutPostFirst").show();
//   			}
//   		}
	}
	
//	function investimentoIniziale(rata,verIni) {
//		var tot = parseFloat(rata) * parseFloat(verIni);
//		$("#investimentoIniziale").text(tot + ' EUR');
//		$("#investimentoIniziale").val(tot);
//		$("#investimentoIniziale").show();
//	}
//	
//	function investimentoTotale(rata,numAnni) {
//		var tot = parseFloat(rata) * parseFloat(numAnni);
//		$("#investimentoTotale").text(tot + ' EUR');
//		$("#investimentoTotale").val(tot);
//		$("#investimentoTotale").show();
//		
//		$("#ratePac").val(numAnni);	//serve nel submit
//	}
	
	function depAssNoAss(reset) {
		var depAss=false;
		var result = $.grep(buyFundSelectBeanJson.depositiConnAss, 
							function(depositoToSearch){ 
								return depositoToSearch == $('#deposito').val(); 
					});
		if(result.length > 0){
			depAss = true;
		}
		if(!depAss || reset) {
			if(!depAss) {
				$('#polizzaPac').hide();	//check
			}
			else if($('#radiobuttonPac').is(':checked')) {
				$('#polizzaPac').show();	//check
			}
			resetDatiPolizza();	
		}
		return depAss;
	}
	
	function showNota(piano, valore, obj){
		if("M" == valore){
			//obj.cod = piano.importoIniziale;
			//obj.tip = piano.tipoPiano;
			obj.nota = piano.note;
			obj.notaVersamento = piano.note_versamenti;
			$("#anticipoRate").text(piano.anticipoRate);	//check
		}
		//codice nel pulsante di avanti
//		 if('$piani.getAnticipoRate()'=="N"){
//			$('versamentiPacOutPost').style.display = '';
//			$('versamentiPacOutPostFirst').style.display = '';
//		 }else if('$piani.getAnticipoRate()'=="S"){
//			$('versamentiPacOutPost').style.display = 'none';
//			$('versamentiPacOutPostFirst').style.display = 'none';
//		 }
	}
	
	
	function selectPeriodo(idSelect, listaPeriodi){
		$(idSelect).empty();
		$.each(listaPeriodi, function(index, periodo){
			 var desc = periodo.descrizione_periodo;
			 var value = '';
			 if("#selectPeriodo" == idSelect){
				 //value = ''+ periodo.numero_periodi + '*' + periodo.id_periodo   + '*' + periodo.descrizione_periodo; 
				 value = JSON.stringify(periodo);
//				 if('M' == periodo.id_periodo){$(idSelect).val(value);}
			 }
			 else{
				 value = periodo.id_periodo;
			 }	
			 value = JSON.stringify(periodo);
			 $(idSelect).append($('<option>').val(value).text(desc));
			 if('M' == periodo.id_periodo){
				 $(idSelect).val(value);
			 }
		});
		
		$("#descrizionePeriodo").val($(idSelect).find(":selected").val()); 
		$("#descrizionePeriodo").text($(idSelect).find(":selected").text());
	}
	
	function calcoloImportoDivisa(){
//		$('#importoPic').text($('#importoPic').val());
		var imp = new Number($('#importoPic').val());
		var data = buyFundSelectBeanJson.dataCambio.replace(/\./g,'/');		//$('#dataCambio').val().replace('.','/');
		var cambio = new Number(buyFundSelectBeanJson.cambio.replace(',','.'));	//check - verfica se serve global replace
		var impSucFin = ((imp/cambio)*1.06).toFixed(0);
		$('#importoPicDivisa').text($('#importoPicDivisa').val() ); //+ " corrispondenti a " + impSucFin + " EUR al cambio del " + data
		$('#importoValuta').val(impSucFin);
		$('#importoDivisa').val(imp);
		$('#divisa').val(buyFundSelectBeanJson.divisa); 		//campo hidden per pagina di conferma
		$('#dataCambio').val(buyFundSelectBeanJson.dataCambio);	//campo hidden per pagina di conferma
		$('#importoPicDivisaTxt').text(" corrispondenti a " + impSucFin + " EUR al cambio del " + data);
	}
	
	function prosegui(){
		proseguiPAC();
	}
		
	
	function resetDatiPolizza() {
		$('#polizza').val(''); 
		$("#siPolizza").prop("checked", false);
		$("#noPolizza").prop("checked", false);
		
		$("#promoEurizonFormBottom").hide();
	
	}
	
	function verificaVerIni(importoIniziale){  
		//var pianoReduced = $.parseJSON($('#selectPac :selected').val());
		
		//check orginale verificaEtica non usa variabile difVerTotali
		var difVerTotali = parseFloat($("#investimentoTotale").val())   - parseFloat(importoIniziale);
		var difImporti   = parseFloat($("#investimentoIniziale").val()) - parseFloat(importoIniziale); 
		if(difVerTotali<0 || difImporti<0){
			var numVerNec = '';
			if(difVerTotali<0){ 
				numVerNec = 1000/($('#spinnerRataOut').val());
			}
			var msg = "Il versamento iniziale deve essere pari ad almeno "+importoIniziale+" &euro;. Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
			showError(true,"E",msg);
			return false;
		}
		return true;
	}
	
	
	function proseguiPAC(){
		var avanti = true;
//		var pianoReduced = $.parseJSON($('#selectPac :selected').val());
		
//		if( codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta || 	
//			codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta){   
//			avanti = verificaVerIni(pianoReduced.importoIniziale);		//verificaEtica
//		}
//		else if(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta){     //#selectPeriodoEpsilon
//			avanti = verificaVerIni("1000");								//verificaEpsilon
//		}
		if("S" == buyFundSelectBeanJson.fondosicav){			//#selectPeriodoSicav check :else
			var importoIniziale = $("#sogliaImportoPacSicav").val();
			if (codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc    == buyFundSelectBeanJson.codiceSocieta 
				|| codiceSocietaMappa.Carmignac_Gest_Luxemb_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta ) {
				importoIniziale = new Number(Math.ceil(buyFundSelectBeanJson.nav));
			}
			avanti = verificaVerIni(importoIniziale);					//verificaSicav
		}
		
//		var verTot = parseFloat($('#spinnerRataOut').val()) * parseFloat($('#selectPacOut').val());
//		var impSuc = buyFundSelectBeanJson.isotsuc ;
//		var difImporti = verTot - impSuc;
//		if( difImporti < 0){
//			var msg = "Il valore dell&#39;importo deve essere uguale o superiore all&#39;importo minimo";
//			showError(true,"E",msg);
//			avanti = false;
//		}
		
		if(avanti){
			showError(false,null,null);
			
			var tipoInvestimento = "PAC";
			var periodoPiano = '';
			var codicePiano = '';
			var numeroAnniPiano = '';
			var enableBuyFund = buyFundSelectBeanJson.enableBuyFund;
			var descSocietaDiGestione = $('#societaGestione').text();
			var importo = $("#spinnerRataOut").val();
			var tipoPiano = '';
			
			var idx = '';
			var periodicitaJson = fundJson.periodicita[fundJson.acquisto.periodicita];
			var numeroratepianoArray = periodicitaJson.numeroratepiano.split(",");
			$.each(numeroratepianoArray, function(index, value){
				if(value == fundJson.acquisto.versamentiTotali) {
					idx = index;
					return false;
				}
			});
			
//			if("S" == buyFundSelectBeanJson.pac){
				numeroAnniPiano = periodicitaJson.numeroannipiano.split(",")[idx];
				tipoPiano = periodicitaJson.tipopiano.split(",")[idx];
				codicePiano = periodicitaJson.codicepiano;
//				var pianoReduced = $.parseJSON($('#selectPac :selected').val());
//				var periodo = $.parseJSON($("#descrizionePeriodo").val());
				periodoPiano = fundJson.acquisto.periodicita;
//			}
			
			if(codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta){
				enableBuyFund="false"
			}
			
			var inputdata = {
					"polizza"					: $('#polizza').val() 
					,"importo"					: $("#investimentoTotale").val() 
					,"importoRata"				: importo 
					,"importoPacSicav"			: $("#investimentoIniziale").val() 
					,"tipoPiano"				: tipoPiano 
					,"periodoPiano"			  	: periodoPiano 
					,"decimale"				  	: "000" 
					,"flagPrivacy"			  	: "" 
					,"codiceSocietaDiGestione"	: buyFundSelectBeanJson.codiceSocieta 
					,"descSocietaDiGestione"  	: descSocietaDiGestione 
					,"codiceFondo"			  	: buyFundSelectBeanJson.codiceComparto 	
					,"deposito"				  	: $('#deposito').val() 
					,"flagReinvestimento"	  	: "" 
					,"tipoInvestimento"			: tipoInvestimento 
					,"codicePiano"				: codicePiano 
					,"numeroAnniPiano"			: numeroAnniPiano 
					,"numeroRatePiano"			: fundJson.acquisto.versamentiTotali
					,"numeroRateVersate"		: $('#spinnerInizialeOut').val() 
					,"enableBuyFund"			: enableBuyFund
					,"fondosicav"				: buyFundSelectBeanJson.fondosicav 
					,"cfam"						: buyFundSelectBeanJson.codiceFamiglia 	
					,"esenzioneEtica"			: $('#esenzioneEtica').val() 
					,"percScontoCom"			: buyFundSelectBeanJson.perScontoComm 
					,"scontoPac"				: buyFundSelectBeanJson.scontoPac 
					,"reinvestimentoSicav"		: $('#reinvestimentoSicav').val() 
					,"obbligoCedola"			: buyFundSelectBeanJson.obbligoCedola 
//					,"codiceFamiglia":buyFundSelectBeanJson.codiceFamiglia	//cfam
					,"controlloFatca"			:	"false" //controlloFatca 				//check TODO
//						,	"datiFatca":datiFatca							//check TODO
//					,"PAC"						: buyFundSelectBeanJson.pac						//non usata 
//					,"categoria"				: buyFundSelectBeanJson.categoriaFondo		//non usata 
//					,"nomeComparto"				: buyFundSelectBeanJson.nomeComparto		//non usata
//					,"descrizionePeriodo"		: $("#descrizionePeriodo").val()
					,"codInt"					: buyFundSelectRequestJson.codInt	
					};
			initializaDatiOrdineOutput(inputdata);
			
			/*
			$('#deposito').show();			//check - prima visualizzava val invece di text
			//check : caso Fondo - non visualizza null ??
			controlloEsenzione();
			$('#datiOrdineOutput').show();	//TODO check anteprimaOrdine()
			*/
		}
		else{
			$('#datiOrdineOutput').hide();
			$('#prosegui').removeAttr('disabled');
		}
	}
	
	function addTxtTooltip(idLable, tooltip){
		//$(idLable).attr("class","txthelp closeable");
		//$(idLable).attr("data-toggle","tooltip");
		if(tooltip){
			$(idLable).attr("data-original-title", tooltip);
		}
		else{
			removeTxtTooltip(idLable);
		}
	}
	
	function removeTxtTooltip(idLable){
		//$(idLable).attr("class","text");
		$(idLable).removeClass("txthelp"); 
		$(idLable).addClass("text"); 
		$(idLable).attr("data-toggle","");
		$(idLable).attr("data-original-title", '');
		//$(idLable).off('click shown');
	}
	
	
	function proseguiModificaToggle(){
		$('#prosegui').toggle();	//,#indietro
//		if(Object.keys(buyFundSelectBeanJson.listaDepositi).length > 1){
//			$('#elencoDepositi,#deposito').toggle();
//		}
//		if('S' == buyFundSelectBeanJson.pac){
//			$('#isPac,#isNotPac').toggle();
//		}
		
		
//			$('#selectPac,#selectPacOut').toggle();
			
//			if( codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta || 	
//				codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta ||
//			    (codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta && depAssNoAss(true)))
//			{	//check depAssNoAss perche altri controlli per visualizzare selectPeriodo non fanno la chiamata
//				$('#selectPeriodo').toggle();
//			}else if(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta ){	//&& 19 == buyFundSelectBeanJson.numeroBanca
//				$('#selectPeriodoEpsilon').toggle();
//			}else if("S" == buyFundSelectBeanJson.fondosicav){			
//				$('#selectPeriodoSicav').toggle();
//			}
//			$('#selectPeriodoSicav').toggle();
//			$('selectPeriodoTxt,#selectPeriodoOut').toggle();
//			$('#spinnerRataDivId,#spinnerVerDivId,#spinnerRataOut,#spinnerInizialeOut').toggle();
			
//		if($('#isNotPac').is(':visible')){
//			$('#importoPicDivId,#importoPicOut').toggle();
//		}
		
//		if(codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta){
			if($('#esenzioneDivId').is(':visible')){
				//$('#esenzioneDivId').show();
			
				if($('#esenzione').attr('disabled')!== undefined ){
					$('#esenzione').removeAttr('disabled');
				}
				else{
					$('#esenzione').attr('disabled','disabled');
				}
//				$('#esenzione').val("014");	//014
			}
//		}
		
		if(codiceSocietaMappa.Anima_Asset_Management_Ltd.newCodSoc == buyFundSelectBeanJson.codiceSocieta){	//check : $bean.getCodiceFamiglia()'=="x"
			$('#cedolaSicavId label,#cedolaSicavRadioId,#textCedSicav').toggle();
		}
		
		
		if($('#formEurizonPromo1').is(':visible')){
			if($('#siPolizza').attr('disabled')!== undefined ){
				$('#siPolizza').removeAttr('disabled');
				$('#noPolizza').removeAttr('disabled');
			}
			else{ 
				$('#siPolizza').attr('disabled','disabled');
				$('#noPolizza').attr('disabled','disabled');
			}
			
		}
		

		if(buyFundPreviewRequestJson != undefined && buyFundPreviewRequestJson != null && buyFundPreviewRequestJson != ""){
			if("true" == buyFundPreviewRequestJson.isFacta || "true" == buyFundPreviewRequestJson.isAdeVer){
				$('#datiOrdineOutput').toggle();
			}
		}
		$('#datiOrdineOutput').toggle();
		
	}
	
	
	//Preview
	function popolaListaDaArray(idLista, nomeArray, check, prop1, prop2){
		$(idLista).empty();
		if(nomeArray!=undefined && nomeArray!=null && nomeArray.length!=0){
//			$(idLista+'Valore').val(JSON.stringify(nomeArray));
			$.each(nomeArray, function(idx, obj) {
				if(check){
					//property to check
				}
				else{
					var valore ='';
					if(obj.hasOwnProperty(prop1)){
						valore += obj[prop1] + "-";
					}
					if(obj.hasOwnProperty(prop2)){
						valore += obj[prop2];
					}
					 $(idLista).append("<li>"+valore+"</li>");
				}
			});
		}
	}
	
	function popolaReipilogoDati(jsonBean) {
		var tipoStrumentoHtml = $('#tipologia').html().substring($('#tipologia').text().trim().length);
		var tipoFondo = jsonBean.fondiSicavDesc;
		$('#pir').val("N");
		$('#tipologia').html(tipoFondo + tipoStrumentoHtml);
		$("#infoPir").hide();
		
		if(jsonBean.pir != undefined && jsonBean.pir == 'S'){	//sezionePir
			tipoFondo = "Fondo PIR";
			$('#tipologia').html(tipoFondo + tipoStrumentoHtml);
			$("#infoPir").show();
			$('#pir').val("S");
		}
//		$('#tipologia').text(jsonBean.fondiSicavDesc);
		
		$('#tipologia2').text(jsonBean.fondiSicavDesc);
		$('#descTipo').text(jsonBean.nomeComparto);
		
//		var hrefScedaFondo = "javascript:document.location.href=";
//		hrefScedaFondo += "wrp_script";
//		hrefScedaFondo += "+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action";
//		hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
//		hrefScedaFondo += "&codiceIsin="+jsonBean.codisin+"&fondo=true'";
//		$("#descTipo").attr("href",hrefScedaFondo);
		
		$("#dataNav").text($("#dataNav").text() + jsonBean.dataNavDesc);
		$('#nav').text(jsonBean.navDesc + ' ' + jsonBean.divisa);
		$('#societaGestione').text(jsonBean.societaGestione);
		$('#categoriaFondo').text(jsonBean.categoriaFondo);
		importoMin(jsonBean,'#importoMinIni',jsonBean.isotmin, 100);
//		importoMin(jsonBean,'#importoMinSuc',jsonBean.isotsuc, jsonBean.iresmin);
		$('#speseIngresso').text(jsonBean.speseIngresso);
		$('#speseIngresso').val(jsonBean.speseIngresso);
		$('#speseGestione').text(jsonBean.spesegestione); 
		$('#speseGestione').val(jsonBean.spesegestione); 
		var valoreSpeseUscita = '';
		var tooltipSpeseUscita = '';
		if(9 != jsonBean.codiceFamiglia && 117 != jsonBean.codiceFamiglia){
			removeTooltip('#commUscita');
		}
		if(9 == jsonBean.codiceFamiglia){
			valoreSpeseUscita = 'Dettaglio';
			tooltipSpeseUscita = "<ul><li>uscita 1&ordm; anno 3,50%</li><li>uscita 2&ordm; anno 3,00%</li><li>uscita 3&ordm; anno 2,50% </li><li>uscita 4&ordm; anno 1,50% </li><li>uscita 5&ordm; anno 1,00% </li></ul>";
		}
		else {
			valoreSpeseUscita = jsonBean.speseUscita;
			if(117 == jsonBean.codiceFamiglia){
				tooltipSpeseUscita = "In caso di rimborso di azioni di classe A verranno applicate, direttamente dalla Sicav, delle commissioni di uscita pari allo 0,5%, solo ai nuovi clienti (s'intende coloro che alla data del 15/02/2014 non possedevano n&egrave; azioni di classe A n&egrave; azioni di classe D).";
			}
		}
		$('#speseUscita').text(valoreSpeseUscita); 
		$('#speseUscita').val(valoreSpeseUscita);
		if(tooltipSpeseUscita != ''){
			addTooltip('#commUscita', tooltipSpeseUscita);
		}
		
		var dirittiFissiTxt = '';
		if("S" == jsonBean.fondosicav){
			dirittiFissiTxt = 'Diritti fissi di banca corrispondente';
//			if(19 == jsonBean.numeroBanca){
				if(buyFundSelectRequestJson.noteComm != undefined){
					conditionalTooltip(buyFundSelectRequestJson.noteComm.notaPacDa, buyFundSelectRequestJson.noteComm.notaPacA, '#dirFissiTxt', buyFundSelectRequestJson.noteComm.notaPac);
				}
//			}
//			else{
//				removeTooltip('#dirFissiTxt');
//			}
		}
		else if("F"==jsonBean.fondosicav){
			dirittiFissiTxt = 'Spese diritti fissi';
			removeTooltip('#dirFissiTxt');
		}
		$('#dirFissiTxt').text(dirittiFissiTxt);
//		$('#dirFissi').text(jsonBean.dirittiFissi);
//		$('#dirFissi').val(jsonBean.dirittiFissi);
				
	}
	
	function popolaDettDestProventi(jsonBean){
		$('#periodoCedola').text(jsonBean.periodoCedola);
		$('#dirittiCedola').text(jsonBean.dirittiCedola);
		$('#periodoCedola').val(jsonBean.periodoCedola);
		$('#dirittiCedola').val(jsonBean.dirittiCedola);
		if("S" == jsonBean.reinvestimento){
			$('#dettDestProventi').show();
		}
	}
	
	function popolaDepositiMargine(jsonBean){
		if(Object.keys(jsonBean.listaDepositi).length > 1){
			$('#elencoDepositi').show();
			$('#deposito').hide();
			$("#elencoDepositi").empty();
			$.each(jsonBean.listaDepositi, function(key, value) {
	            $("#elencoDepositi").append($('<option>').val(key).text(value));
	        });
			
			$('#deposito').val($('#elencoDepositi :selected').val());
			$('#deposito').text($('#elencoDepositi :selected').text());
			
			$('#elencoDepositi').change(function(){
				$('#deposito').val($('#elencoDepositi :selected').val());
				$('#deposito').text($('#elencoDepositi :selected').text());
				requestMargine($('#deposito').val(), "false");
			});
		}
		else{ 
			$.each(jsonBean.listaDepositi, function(key, value) {
				$('#deposito').val(key);
				$('#deposito').text(value);
			});
			
			$('#deposito').show();
		}
		requestMargine($('#deposito').val(), "false");
	}
	
	function testoTempistiche(jsonBean){
		var soggTemp = '', oreTemp = '';
		if("F" == jsonBean.fondosicav){
			soggTemp = ' alla SGR ';
//			oreTemp = ' 21.30 ';
		}
		else if("S" == jsonBean.fondosicav){
			soggTemp = ' al soggetto incaricato dei pagamenti ';
//			oreTemp = ' 21.00 ';
		}
		$('.soggTemp').text(soggTemp);
//		$('.oreTemp').text(oreTemp);
		
	}

	function sezioneConsensoDatiPersonali(){
		 var txtSi = "", txtNo = "", codSoc = "" ;
		 if(codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta){
			 codSoc = " Anima SGR ";
		 }
		 else if(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta){
			 codSoc = " Epsilon SGR ";
		 }
		 else if(codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundPreviewBeanJson.codiceSocieta){
			 codSoc = " Eurizon Capital SGR ";
		 }
		 else if(codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta){
			 codSoc = " Etica SGR ";
		 }
		 
		 txtSi = "dare il consenso ad" + codSoc + "all&#39;utilizzo dei miei dati per le finalit&#224; sopra indicate." ;
		 txtNo = "non " + txtSi;
		 $('#txtFlagPrivacySi').html(txtSi);
		 $('#txtFlagPrivacyNo').html(txtNo);
		 $('#txtDisclaimerPrivacy').html(buyFundPreviewBeanJson.disclaimerPrivacy);
		 
		 //Privacy per ora non da visualizzare
//		 $('#idConsensoDatiPersonali').show();
	}
	
	function sezioneSottoscrizione(){
		$('#custCognomeNome').text(depositoCustomer.surname + ' ' + depositoCustomer.name);
		$('#custDeposito').text($('#deposito').text());
		$('#custNascita').text(depositoCustomer.birthday + ' ' + depositoCustomer.birthplace);
		$('#custProvincia').text(depositoCustomer.birthProvince);
		$('#custCittadinanza').text(depositoCustomer.residenceState);
		$('#custResidenza').text(depositoCustomer.residenceAddress);
		$('#custCAP').text(depositoCustomer.residenceZip);
		$('#custResidenzaComune').text(depositoCustomer.residenceCity);
		$('#custResidenzaProvincia').text(depositoCustomer.residenceProvince);
		$('#custRecapito').text(depositoCustomer.mailAddress);
		$('#custRecapitoCAP').text(depositoCustomer.mailZip);
		$('#custRecapitoComune').text(depositoCustomer.mailCity);
		$('#custRecapitoProvincia').text(depositoCustomer.mailProvince);
		$('#custEmail').text(depositoCustomer.emailAddress);
		$('#custNomeComparto').text(buyFundSelectBeanJson.nomeComparto); 
		$('#custNumQuote').text("");
		
		$('#idSezioneSottoscrizione').show();
	}
	
	function sezioneDichiarazioni(){
//		if("PRIMA" == buyFundPreviewBeanJson.info){
			if("S" == buyFundPreviewBeanJson.fondosicav){
				if(codiceSocietaMappa.Schroder_Inv_Mgmt.newCodSoc == buyFundPreviewBeanJson.codiceSocieta){	//101 -> 902	
//					$('#idTxtDisclaimer').text(buyFundPreviewBeanJson.disclaimer);
					sezioneSottoscrizione();
				}
//				else{
//					$('#idTxtDisclaimer').append("<ul id='disclaimerList'></ul>");
//					$('#disclaimerList').append(buyFundPreviewBeanJson.disclaimer);
//					
//				}
				
				$('#txtDichiarazioni').html("Dichiarazioni e prese d&#39;atto");	//d&#39;atto
			}
			else{
				 $('#txtDichiarazioni').text("Dichiarazioni di conferme");
//				 $('#idTxtDisclaimer').append("<ul id='disclaimerList'></ul>");
//				 $('#disclaimerList').append(buyFundPreviewBeanJson.disclaimer);	// check non contiene apice e/o doppio apice
			}
			$('#idTxtDisclaimer').html(buyFundPreviewBeanJson.disclaimer);
			$('#idSezioneDichiarazioni').show();
//			$('#primaSottoscrizione').val("S");
//		}
		
	}
	
function initializaDatiOrdineOutput(inputData){
//		var msg = "Si &egrave; verificato un errore di connessione";
	
		$.ajax({
			url: wrp_script_direct + "/investimenti/BuyFundPreviewJson.action" + "?cf=" + Math.random(),
        	dataType: "json",
            data: inputData,
            success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
            			var msg = "Si &egrave; verificato un errore di connessione";
            			if(200 == jqXHR.status){
            				buyFundPreviewBeanJson = $.parseJSON(dataOutJSON.data.buyFundPreviewBeanJson);
            				buyFundPreviewRequestJson = $.parseJSON(dataOutJSON.data.buyFundPreviewRequestJson);
            				
            				if(buyFundPreviewBeanJson == undefined || buyFundPreviewBeanJson == null || buyFundPreviewBeanJson == ""){
//            					showError(true,"E",msg);
            					showError(true,"E",buyFundPreviewBeanJson.errorMessage);
            					$('#datiOrdineOutput').hide();
            				}
            				else if("failure" == buyFundPreviewBeanJson.action){
//            					showError(true,"E",msg);
            					showError(true,"E",buyFundPreviewBeanJson.errorMessage);
            					$('#datiOrdineOutput').hide();
            				}
            				else{
            					if("warning" == buyFundPreviewBeanJson.action && "0" == buyFundPreviewRequestJson.numeroAppropriatezza){
                					showError(true,"W",buyFundPreviewBeanJson.errorMessage);
                				}
            					else{
            						showError(false,null,null);
            					}
            					caricaDatiOrdineOutput(); 
            					proseguiModificaToggle();	
            				}
            			}
            			else{
            				showError(true,"E",msg);
            				$('#datiOrdineOutput').hide();
            			}
            },
            error: function (jqXHR, status, errorThrown) {
            			var msg = "Si &egrave; verificato un errore di connessione";
               	        showError(true,"E",msg);
               	        $('#datiOrdineOutput').hide();
            }
            ,complete: function (jqXHR, status){ 
            			$('#prosegui').removeAttr('disabled');
            }
		});
}
	function caricaDatiOrdineOutput(){
		
		/*
		var buyFundPreviewBeanJson1 = {"requestParameters":{},"action":"successRcs","errorMessage":"","fondosicav":"F","codiceComparto":null,"nomeComparto":null,"societaGestione":"Anima Sgr Spa","numeroContratto":null,"quote":null,"dataNAV":null,"divisa":null,"controvalore":null,"codiceSocieta":1,"codiceFamiglia":"7","speseIngresso":null,"speseUscita":null,"spesegestione":null,"spesePac":null,"dirittiFissi":null,"categoriaFondo":null,"flagReinvestimento":" ","dataOdierna":null,"cambio":null,"dataCambio":null,"tipoAzione":null,"depositoSelezionato":null,"reinvestimento":null,"perScontoComm":null,"descrizionePeriodo":"","enableBuyFund":false,"numeroBanca":19,"dirittiCedola":null,"periodoCedola":null,"obbligoCedola":null,"enableBuyNoEur":false,"scontoPac":null,"listaPiani":[],"listaPeriodi":[],"listaDepositi":{},"deposito":"1099/638333/0","dataOperazione":"04/05/2017","dataValuta":"05/05/2017","dataRegistrazione":"08/05/2017","dataInvio":null,"info":null,"numRegistrazione":"0","numContrattoPAC":null,"importo":null,"importovaluta":null,"importoDivisa":null,"chiave":"                                    ","tipoInvestimento":null,"descrizionePianoPac":null,"importoRata":0,"rateResidue":0,"investimentoTotale":0,"rateVersate":0,"retetotali":0,"cutOff":false,"orarioCutOff":"21:00","pdfIncentivi":"documento_incentivi_Anima.pdf","pdfProspetto":"Kiid_SistemaAnima.pdf","codiceSocGestione":null,"cedolaSicav":null,"adeguatezza":[],"messaggi":[],"inducement":[{"messaggio":"- PER IL PRESENTE COLLOCAMENTO LA BANCA PERCEPIRA' DAL L'EMITTENTE LE SEGUENTI COMMISSIONI MASSIME:  100,0% D ELLE COMMISSIONI DI INGRESSO PARI A   5,00%  ","codiceMessaggio":5505},{"messaggio":"- PER IL PRESENTE COLLOCAMENTO LA BANCA PERCEPIRA' DAL                L'EMITTENTE LE SEGUENTI COMMISSIONI MASSIME:  87,25% D                ELLE COMMISSIONI DI GESTIONE PERIODICHE PARI A   2,00%                ","codiceMessaggio":5503}],"conflitti":[{"messaggio":"Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti finanziari emessi da Società finanziate in misura rilevante dal Gruppo Bipiemme.","codiceMessaggio":5107},{"messaggio":"Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti finanziari emessi da una Società direttamente o indirettamente collegate al Gruppo Bipiemme.","codiceMessaggio":5105},{"messaggio":"Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti finanziari emessi da una Società di cui il Gruppo Bipiemme detiene una partecipazione rilevante.","codiceMessaggio":5103},{"messaggio":"Ti informiamo che stai per effettuare un'operazione nella quale Webank ha un conflitto di interessi per prodotti o servizi di terzi per i quali la Banca percepisce delle commissioni.","codiceMessaggio":5102}],"scorap":[{"idQuest":"1","domanda":"INVESTIMENTO FAMILIARE/PERSONALE/RISPARMIO"},{"idQuest":"2","domanda":"INVESTIMENTO PROFESSIONALE/AZIENDALE/COMMERCIALE"},{"idQuest":"3","domanda":"INVESTIMENTO CONTO TERZI"}],"sorifin":[{"idQuest":"01","domanda":"PENSIONE"},{"idQuest":"02","domanda":"REDDITO DA LAVORO AUTONOMO"},{"idQuest":"03","domanda":"REDDITO DA LAVORO DIPENDENTE"},{"idQuest":"04","domanda":"RISPARMIO"},{"idQuest":"05","domanda":"SUCCESSIONE"},{"idQuest":"06","domanda":"DONAZIONE"},{"idQuest":"07","domanda":"DISINVESTIMENTO STRUMENTO FINANZIARIO"},{"idQuest":"08","domanda":"VINCITA"},{"idQuest":"09","domanda":"LIQUIDAZIONE PREMI ASSICURATIVI"},{"idQuest":"10","domanda":"VENDITA BENI IMMOBILI"},{"idQuest":"11","domanda":"VENDITA BENI MOBILI"},{"idQuest":"12","domanda":"VENDITA/ACQUISTO"},{"idQuest":"13","domanda":"INCASSO DA CLIENTI"},{"idQuest":"14","domanda":"ALTRO"}],"obbligoAdv":"N","anticipoRate":null,"disclaimerPrivacy":null,"disclaimer":null,"disclaimerFatca":null,"polizza":null,"isotsuc":0.0,"isotmin":0.0,"iresmin":0.0,"pac":null,"codisin":null,"nav":0.0,"irimmin":0.0,"depositiConnAss":[],"parametersString":""};
		var buyFundPreviewRequestJson1 = {"idDocProspetto":"10001","idTypeProspetto":"17"}; //sicav=18
		*/
		
		if(buyFundPreviewRequestJson != undefined && buyFundPreviewRequestJson != null && buyFundPreviewRequestJson != ""){
			
			$("form[name=formPdf] > input[name=keyDocumento]").val(buyFundSelectBeanJson.codisin);
			
			if("true" == buyFundPreviewRequestJson.isFacta){
				
				$('#checkDocFatca').attr('disabled','disabled');
				resetHasErrors("#sezioneFatca");
				$('#checkDocFatca,#checkDatiFatca').click(function() {
					resetHasErrors("#sezioneFatca");
				});
				
				$('#sezioneFatca').show();
				$('#idDisclaimerFatca').html(buyFundPreviewBeanJson.disclaimerFatca);
				
				caricaDatiFatcaIntestatario(buyFundPreviewRequestJson);
				
				return;
			}
			else if("true" == buyFundPreviewRequestJson.isAdeVer) 
			{
				resetHasErrors("#sezioneAdeVer");
				
				if($('#deposito').val().split("/")[2] !="0"){
					if(! listaDepPIR[$('#deposito').val()]){
						showError(true, "E", (buyFundPreviewRequestJson.errorMessage ? buyFundPreviewRequestJson.errorMessage : "Per poter operare &egrave; necessario compilare l&apos;Adeguata Verifica sul sottodeposito del proprio cointestatario"));
						proseguiModificaToggle();
						return;
					}
					else{
						showError(false, null, null);
					}
				}
				$('#sezioneAdeVer').show(); $('#sezioneAdeVer').addClass("loading");
				if(undefined != datiAdeVer.numint && datiAdeVer.deposito == $('#deposito').val()){	
					$('#sezioneAdeVer').removeClass("loading");
				}
				else{
					if(stringa_F == buyFundSelectBeanJson.fondosicav){
						methodAdeVer = 'FONDI';
					}
					else{
						methodAdeVer = 'SICAV'
					}
					AdeVer.loadFields(methodAdeVer, 'all', $('#deposito').val());	//chiama impostaValoriSelect()
				}
					
				return; 
			}
		}
		
		depositoCustomer = buyFundPreviewRequestJson.depositoCustomer;
						/*	{	"name":"Pippo", 				"surname":"Pluto", 
								"birthday":"01/01/1970",		"birthplace":"Torino",
								"birthProvince":"Torino",		"residenceState":"Italiana",
								"residenceAddress":"Roma",		"residenceZip":"20120",
								"residenceCity":"Milano", 		"residenceProvince":"Milano",
								"mailAddress":"Massaua",		"mailZip":"20122",
								"mailCity":"Milano",			"mailProvince":"Milano",
								"emailAddress":"abc@xyz.com"	
							}; */
		//buyFundPreviewBeanJson.disclaimer = "<li>dichiaro di essere consapevole che il fondo in cui intendo investire fa parte del Prospetto d'Offerta costituito da un insieme di fondi istituiti da Epsilon associati sgr</li><li>dichiaro di essere debitamente informato circa la natura e le caratteristiche del fondo da me richiesto e di essere consapevole dei rischi derivanti dal relativo investimento; a tale riguardo confermo di aver letto, compreso ed accettare quanto previsto nella documentazione relativa al fondo (Prospetto Semplificato, Prospetto Completo, Regolamento di gestione del fondo, Modulo di sottoscrizione);</li><li>dichiaro di avere autonomamente valutato le condizioni economiche dell'operazione di investimento in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato;</li><li>dichiaro di essere consapevole che gli ordini di investimento o disinvestimento conferiti in un giorno non lavorativo si considerano pervenuti il primo giorno lavorativo successivo;</li><li>chiedo che le quote da me sottoscritte siano inserite nel certificato cumulativo tenuto a titolo gratuito in deposito presso la Banca Depositaria, ferma restando la mia facoltà di poter richiedere l'emissione di un certificato fisico nominativo o al portatore contattando la banca; a tal proposito, dichiaro, altresì, di aver letto, compreso e di accettare integralmente le \"Norme relative alle quote immesse nel certificato cumulativo\" riportate anche nel modulo di sottoscrizione del fondo;</li><li>prendo atto ed accetto che potrò richiedere in qualsiasi momento il rimborso totale o parziale delle quote rivolgendomi alla banca;</li><li>confermo le mie dichiarazioni circa le mie precedenti esperienze ed attuali conoscenze nell'ambito degli investimenti in strumenti finanziari.</li>";
		
		
//		switch(buyFundPreviewBeanJson.numeroBanca){
//		case 1:  bankName = "Banca Popolare di Milano"; 		 break;
//		case 4:  bankName = "Banca di Legnano"; 				 break;	//check
//		case 15: bankName = "Cassa di Risparmio di Alessandria"; break;
//		case 18: bankName = "Banca Popolare di Mantova"; 		 break;
//		case 19: bankName = "WeBank"; 							 break;
//		default: bankName = '';
//		}
		bankName = "WeBank";
		$('.bankName').text(bankName);
		
		if(buyFundSelectBeanJson.pir != undefined && buyFundSelectBeanJson.pir == 'S'){
			$("#sezionePir").show();
			$("#checkboxPir").prop("checked", false);
		}
		
		if( (buyFundPreviewBeanJson.adeguatezza != undefined && buyFundPreviewBeanJson.adeguatezza !=null && buyFundPreviewBeanJson.adeguatezza.length > 0) ||
			(buyFundPreviewBeanJson.conflitti   != undefined && buyFundPreviewBeanJson.conflitti !=null && buyFundPreviewBeanJson.conflitti.length > 0)   || 
			(buyFundPreviewBeanJson.messaggi    != undefined && buyFundPreviewBeanJson.messaggi!=null && buyFundPreviewBeanJson.messaggi.length > 0)){
			
			//check verifica se msg non contiene caratere strane come à (&agrave;)
			popolaListaDaArray("#listaAdeguatezza",buyFundPreviewBeanJson.adeguatezza, false, "","messaggio"); //codice
			popolaListaDaArray("#listaConflitti"  ,buyFundPreviewBeanJson.conflitti	 , false, "","messaggio");
//			popolaListaDaArray("#listaMessaggi"   ,buyFundPreviewBeanJson.messaggi	 , false, "","messaggio");
			
			$('#idAvvertenze').show();
		}
		
//		if(buyFundPreviewBeanJson.inducement != undefined && buyFundPreviewBeanJson.inducement!=null && buyFundPreviewBeanJson.inducement.length>0){ 
//			//msgInd = 'OK';
//			popolaListaDaArray("#listaInducement" ,buyFundPreviewBeanJson.inducement , false, "","messaggio");
//			$('#idInducement').show();
//			
//		}
		
		testoTempistiche(buyFundPreviewBeanJson);
		
		$('#btnTempistiche').click(function() { 	
			Finance.tempistiche("AQ", buyFundPreviewBeanJson.codiceSocieta);
		});
		
		//MIFID2
		$('#idInducement').show();
		datiMifid = buyFundPreviewRequestJson.datiMifid;	
		if(datiMifid == undefined){
			datiMifid = {};
//			 datiMifid.codiceSocieta = buyFundSelectBeanJson.codiceSocieta;
		}
		datiMifid.strumentoFinanziario = buyFundSelectBeanJson.nomeComparto;
		 
		var controValore = $("#investimentoIniziale").val();
		datiMifid.controvaloreOperazione = parseFloat(controValore).toLocaleString("it-IT",{minimumFractionDigits:2}) + " &euro;";
		
		datiMifid.importoControvaloreLordo	 		 = datiMifid.controvaloreOperazione;
		datiMifid.percentualeControvaloreLordo 		 = "100,00 &#37";
		datiMifid.totaleImportoControvaloreLordo	 = parseFloat(controValore);
		datiMifid.totalePercentualeControvaloreLordo = parseFloat(100);
		
		showDatiMifid2_tab8(datiMifid); 
		
		var idTxt = '', txtConferma2 = '', elencoTermini = [], txtDoc2='';
		if("F" == buyFundPreviewBeanJson.fondosicav){
			$('#txtInfoFondo1').show();
			$('#txtInfoFondo2').show();
			idTxt = "Documentazione obbligatoria";
			
			 //Privacy per ora non da visualizzare
//			if("PRIMA" == buyFundPreviewBeanJson.info){
//				 if( codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc 	  		== buyFundPreviewBeanJson.codiceSocieta || 	
//					 codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc 	  		== buyFundPreviewBeanJson.codiceSocieta ||
//					 codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc 		== buyFundPreviewBeanJson.codiceSocieta ||
//					 codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta)
//				 { 
//					 sezioneConsensoDatiPersonali();
//				 }	 
				 
					 
				elencoTermini[0] = "confermi l&#39;autorizzazione generale gi&#224; rilasciata a "+ bankName +" di operare in <strong>conflitto di interessi</strong>";
				elencoTermini[1] = "confermi di aver <strong>letto e approvato specificatamente</strong>, ai sensi dell&#39;art. 1341 del c.c., <strong>le seguenti clausole</strong> del Regolamento di gestione del fondo: &#8220;Denominazione e durata dei Fondi&#8221;, &#8220;Compiti e responsabilit&#224; della Banca Depositaria&#8221;, &#8220;Partecipazione al Fondo&#8221;, &#8220;Quote e certificati di partecipazione&#8221;, &#8220;Rimborso delle quote&#8221;, &#8220;Valore unitario della quota e sua pubblicazione&#8221;, &#8220;Modifiche del Regolamento&#8221;, &#8220;Liquidazione del Fondo&#8221; e &#8220;Spese ed oneri a carico dei Partecipanti e di ciascun Fondo&#8221;.";
				
				
//			}
			
			txtConferma2 = " societ&#224; di gestione del fondo ";
			txtDoc2 = ' al fondo ';
		}
		else if("S" == buyFundPreviewBeanJson.fondosicav){
			idTxt = "Prospetto informativo";
			$('#txtDoc1').show();
//			if("PRIMA" == buyFundPreviewBeanJson.info){
				
				elencoTermini[0] = "confermi l&#39;autorizzazione generale gi&#224; rilasciata a " + bankName + " di operare in <strong>conflitto di interessi</strong>";
				elencoTermini[1] = "dichiari di essere debitamente informato circa la natura e le caratteristiche della Sicav e di essere consapevole dei rischi derivanti dal relativo investimento; a tale riguardo dichiari di aver letto, compreso ed accettare quanto previsto nella documentazione relativa alla Sicav (Prospetto Semplificato, Prospetto Completo, Statuto, Modulo di sottoscrizione)";
				elencoTermini[2] = "dichiari di avere <strong>autonomamente valutato le condizioni economiche dell&#39;operazione di investimento</strong> in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato";
				elencoTermini[3] = "dichiari di essere consapevole che gli ordini di investimento o disinvestimento conferiti in un giorno non lavorativo si considerano pervenuti il primo giorno lavorativo successivo";
				elencoTermini[4] = "confermi le tue dichiarazioni circa le tue precedenti esperienze ed attuali conoscenze nell&#39;ambito degli investimenti in strumenti finanziari.";
			
//				$('#primaSottoscrizione').val("S");
//			}
			
			txtConferma2 = " Sicav ";
			txtDoc2 = ' alla Sicav ';
		}	
			if("S" == buyFundSelectBeanJson.reinvestimento){
				
				if("" == buyFundPreviewBeanJson.flagReinvestimento){
					if(stringa_N == buyFundSelectBeanJson.obbligoCedola){
						$('#flagReinveastimentoId').show();
						if(codiceSocietaMappa.FIL_Inv_Mgmt_Lux_SA.newCodSoc == buyFundPreviewBeanJson.codiceSocieta){
							$('#textFlgReinv').html("<strong>Nota:</strong> nell'opzione accredito, si ricorda che per cedole pari ad un controvalore inferiore a 50 USD, Fidelity proceder&agrave; al reinvestimento in quote.");
							$('#textFlgReinv').show();
						}
					}
					else if(stringa_S == buyFundSelectBeanJson.obbligoCedola){
						$('#flagReinveastimentoId').show();
						$('#flagReinveastimentoSiId').hide();
						$('#flagReinveastimentoNo').prop('checked', true);
					}
				}
				else if(stringa_S == buyFundPreviewBeanJson.flagReinvestimento){
					$('#textFlgReinv').html("<p>Per variare la scelta fatta in fase di prima sottoscrizione (accredito sul conto corrente) inviare un fax al n. 0458217263 indicando la nuova volont&agrave;.</p>");
					$('#textFlgReinv').show();
					$('#flagReinvestimento').val(stringa_S);
					$('#flagReinveastimentoSi').prop('checked', true);
					$('#flagReinveastimentoSi').attr('disabled','disabled');
					$('#flagReinveastimentoId').show();
					$('#flagReinveastimentoNoId').hide();
				}
				else if(stringa_N == buyFundPreviewBeanJson.flagReinvestimento){
					$('#textFlgReinv').html("<p>Per variare la scelta fatta in fase di prima sottoscrizione (accredito sul conto corrente) inviare un fax al n. 0458217263 indicando la nuova volont&agrave;.</p>");
					$('#textFlgReinv').show();
					$('#flagReinvestimento').val(stringa_N);
					$('#flagReinveastimentoNo').prop('checked', true);
					$('#flagReinveastimentoNo').attr('disabled','disabled');
					$('#flagReinveastimentoId').show();
					$('#flagReinveastimentoSiId').hide();
				}
				$('#reinvestimentoOut').show();
			}
			
		
		$('#idTxtDoc').text(idTxt);
		$('#txtDoc2').text(txtDoc2);
		
		sezioneDichiarazioni();
		//TODO - common function per 2 in polizza pac e questo
		
		resetHasErrors("#idDocumentazione");	//nascondere checkbox fianco campo di errore dopo carica della pagina
		resetHasErrors("#idAvvertenze");
		resetHasErrors("#idInducement");
		resetHasErrors("#idConsensoDatiPersonali");
		resetHasErrors("#idSezioneDichiarazioni");
		resetHasErrors("#flgReinvId");
		
		if(! $('#checkProspetto').is(':checked')){
			addTxtTooltip('#checkLinkProspetto',"Per proseguire occorre avere preso visione del documento relativo al prospetto informativo"); // check : prospetto solo per sicav .. per fondo si chiama docuemnto obbligatorio
		}
		$('#checkProspetto').attr('disabled','disabled');
		$('#checkProspetto').click(function() {
			if($(this).is(':checked')){   
				$(this).attr('disabled','disabled');
			}
		});
		
		$('#linkDocObb').click(function() {
			docOn |= 1;
			if(docOn==3 ){	
					 $('#checkProspetto').removeAttr('disabled');
					 resetErrors('#checkProspetto');		// check
					 removeTxtTooltip('#checkLinkProspetto');
			}
			
			if(newRepoAbilitati==false) {
					open(wrp_script + "/common/apriDocumento.action?id="+ buyFundPreviewRequestJson.idDocProspetto	+ "&prodotto=" + buyFundPreviewRequestJson.idTypeProspetto	+ "&isPDF=true");
			} else {
				apriNewDocumenti("kiid");
			}
			
			
		});
		
		$('#linkDocObb1').click(function() {
			docOn |= 2;
			if(docOn==3 ){
					$('#checkProspetto').removeAttr('disabled');
					resetErrors('#checkProspetto'); // check
					removeTxtTooltip('#checkLinkProspetto');
			}
	
		
		if(newRepoAbilitatiSott==false) {
				open(wrp_script + "/common/apriDocumento.action?id="+ buyFundPreviewRequestJson.idDocModulo + "&prodotto=" + buyFundPreviewRequestJson.idTypeProspetto	+ "&isPDF=true");
		} else {
			apriNewDocumenti("sot");
		}
			
	});
		
		$("#linkDocObb").text("Informazioni chiave per l\'investitore (KIID) " + (buyFundSelectBeanJson && buyFundSelectBeanJson.codisin ? buyFundSelectBeanJson.codisin : ""));
		$("#linkDocObb1").text("Modulo di sottoscrizione " + (buyFundSelectBeanJson && buyFundSelectBeanJson.codisin ? buyFundSelectBeanJson.codisin : ""));
		
		if(0 == elencoTermini.length){
				elencoTermini[0] = "confermi di aver letto nuovamente la documentazione relativa al fondo ed in particolare di quanto previsto in ordine alle modalit&#224; di effettuazione delle operazioni successive alla prima sottoscrizione";
				elencoTermini[1] = "autorizzi " + bankName + " a compiere tutto quanto necessario per eseguire l&#39;operazione di investimento richiesta; autorizzi altres&#236; l&#39;addebito sul conto corrente collegato al deposito titoli precedentemente scelto di quanto necessario per eseguire l&#39;operazione";
				elencoTermini[2] = "confermi l&#39;autorizzazione generale gi&#224; rilasciata a " + bankName + " di operare in conflitto di interessi";
				elencoTermini[3] = "dichiari di avere autonomamente valutato le condizioni economiche dell&#39;operazione di investimento in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato";
				elencoTermini[4] = "confermi le tue dichiarazioni circa le tue precedenti esperienze ed attuali conoscenze nell&#39;ambito degli investimenti in strumenti finanziari.";
		}
		
		$("#listaTerminiConferma").empty();
		$.each(elencoTermini, function(idx){
			$('#listaTerminiConferma').append("<li>" + elencoTermini[idx] );
		});
		
		$('#txtConferma2').html(txtConferma2);
		
		//reset errori quando checkbox o radio sono selezionati
		$('#checkboxPir').click(function() {
			resetHasErrors("#sezionePir");
		});
		$('#checkAvvertenze').click(function() {
			resetHasErrors("#idAvvertenze");
		});
		$('#checkIncentivi').click(function() {
			resetHasErrors("#idInducement");
		});
		$('#checkProspetto').click(function() {
			resetHasErrors("#idDocumentazione");
		});
		$('#flagPrivacyNo, #flagPrivacySi').click(function() {
			resetHasErrors("#idConsensoDatiPersonali");
		});
		$('#flgDichiarazioni').click(function() {
			resetHasErrors("#idSezioneDichiarazioni");
		});
		
		
		$('#flagReinveastimentoSi').click(function() {
			$('#flagReinvestimento').val(stringa_S);
		});
		$('#flagReinveastimentoNo').click(function() {
			$('#flagReinvestimento').val(stringa_N);
		});
		
		
		$("input[name=checkLimitazioni]").prop('checked', false);
		resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent().parent());
		$("input[name=checkLimitazioni]").click(function() {
			resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent().parent());
		});
		
		$("input[name=checkMandatoSIP]").prop('checked', false);
		resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
		$("input[name=checkMandatoSIP]").click(function() {
			resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
		});
		
		
		$("input[name=checkPrivacyOICVM]").prop('checked', false);
		resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
		$("input[name=checkPrivacyOICVM]").click(function() {
			resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
		});
		
		
		$('#indietro2').click(function() {
			var conto = $('#deposito').val();
			var hrefSimCartPAC = "javascript:document.location.href=";
			hrefSimCartPAC += "wrp_script";
			hrefSimCartPAC += "+'/wbOnetoone/2l/action/investimenti/SimCartPAC.action";
			hrefSimCartPAC += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore";
			hrefSimCartPAC += "&conto="+conto+"'";
			$("#indietro").attr("href",hrefSimCartPAC);
		});
		
	}
	
	
	var divAccordion = " \
			<div id=\"panel_{{index}}\" class=\"panel panel-default \"> \
				<div id=\"heading_{{index}}\" class=\"panel-heading\" role=\"tab\"> \
					<h4 id=\"title_{{index}}\" class=\"panel-title\"> \
						<a id=\"toggle_{{index}}\" data-toggle=\"collapse\" href=\"#collapse_{{index}}\" aria-expanded=\"true\" aria-controls=\"collapse_{{index}}\" class=\"collapsed\"> \
							{{nomeCognome}} \
							<i class=\"icon icon-arrow_down\"></i><i class=\"icon icon-arrow_up\"></i> \
						</a> \
					</h4> \
				</div> \
				<div id=\"collapse_{{index}}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading_{{index}}\" aria-expanded=\"true\" style=\"\"> \
					<div id=\"panelbody_{{index}}\" class=\"panel-body\"> \
						<div class=\"formGenerico borderFormRounded\"> \
							<div class=\"form-group\"> \
								<div class=\"row\"> \
									<div class=\"col-sm-12\"> \
										<label class=\"control-label-output\">Nome Cognome</label>  \
										<span class=\"output\" id=\"intestNomeCognome\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Data di nascita</label>  \
										<span class=\"output\" id=\"intestDataNascita\"></span> \
									</div> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Luogo di nascita</label>  \
										<span class=\"output\" id=\"intestLuogoNascita\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Telefono</label>  \
										<span class=\"output\" id=\"intestTelefono\"></span> \
									</div> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Cittadinanza</label>  \
										<span class=\"output\" id=\"intestCittadinaza\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Indirizzo di residenza</label>  \
										<span class=\"output\" id=\"intestIndirizzoRes\"></span> \
									</div> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Indirizzo di corrispondenza</label>  \
										<span class=\"output\" id=\"intestIndirizziCorr\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-12\"> \
										<p>Alla luce di tali normative, ti chiediamo di \
											<a class=\"linkTodisable\" 			id=\"modaldis\" 		data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#layeralert2\" onclick=\"loadData(this.id);\" style=\"text-decoration:underline;color:#6f8f0a\" > \
											dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a> \
											<a class=\"linkTodisable disabled\" 	id=\"modaldisabled\" 	data-backdrop=\"static\" style=\"display: none;\"> \
											dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a> \
										</p> \
									</div> \
								</div> \
							</div> \
						</div> \
					</div> \
				</div> \
			</div>";
	
	function caricaDatiFatcaIntestatario(previewRequestJson){
		
		if(previewRequestJson.listaIntestatariFatca!=undefined && previewRequestJson.listaIntestatariFatca.length>1){
			$('#sezioneFatcaMultiInt').show();
		}

		$('#sezioneFatcaDatiInt').empty();
		jQuery('<div/>', {
					    id: 'accordion',
					    'class': "panel-group",
						role: "tablist",
						'aria-multiselectable':"true"
					}).appendTo('#sezioneFatcaDatiInt');
					
		var divAccordionVal = '';
		
		$.each(previewRequestJson.listaIntestatariFatca, function(index, intestatarioFatca){ 
			
			divAccordionVal = divAccordion.replace(/{{index}}/g,index);
			
			divAccordionVal = divAccordionVal.replace(/{{nomeCognome}}/g,intestatarioFatca.nome + ' ' + intestatarioFatca.cognome);
			
			divAccordionVal = divAccordionVal.replace('intestNomeCognome',	'intestNomeCognome_'	+index);
			divAccordionVal = divAccordionVal.replace('intestDataNascita',	'intestDataNascita_'	+index);
			divAccordionVal = divAccordionVal.replace('intestLuogoNascita',	'intestLuogoNascita_'	+index);
			divAccordionVal = divAccordionVal.replace('intestTelefono',		'intestTelefono_'		+index);
			divAccordionVal = divAccordionVal.replace('intestCittadinaza',	'intestCittadinaza_'	+index);
			divAccordionVal = divAccordionVal.replace('intestIndirizzoRes',	'intestIndirizzoRes_'	+index);
			divAccordionVal = divAccordionVal.replace('intestIndirizziCorr','intestIndirizziCorr_'	+index); 
			divAccordionVal = divAccordionVal.replace('modaldis',			'modaldis_'	+index); 
			
			$('#accordion').append(divAccordionVal);
			$('#intestNomeCognome_'+index).text(intestatarioFatca.nome + ' ' + intestatarioFatca.cognome);
			$('#intestDataNascita_'+index).text($.datepicker.formatDate('dd/mm/yy', new Date(intestatarioFatca.dataNascita)));
			$('#intestLuogoNascita_'+index).text(intestatarioFatca.luogoNascita);
			$('#intestTelefono_'+index).text(intestatarioFatca.telefono);
			$('#intestCittadinaza_'+index).text(intestatarioFatca.cittadinanza);
			$('#intestIndirizzoRes_'+index).text( intestatarioFatca.residenza 		+ ', ' + intestatarioFatca.residenzaCap 	 + ', ' + intestatarioFatca.residenzaCitta 		+ ' (' + intestatarioFatca.residenzaProvincia 		+ ')');
			$('#intestIndirizziCorr_'+index).text(intestatarioFatca.corrispondenza 	+ ', ' + intestatarioFatca.corrispondenzaCap + ', ' + intestatarioFatca.corrispondenzaCitta + ' (' + intestatarioFatca.corrispondenzaProvincia 	+ ')');

			for(var j=2; j<=4; j++){
				$('<input>').attr({
				    type: 	'hidden',
				    id: 	'TIN'+j+'_int1_'+index,
				    name: 	'TIN'+j+'_int1_'+index
				}).appendTo('#buyFundForm');
				
				$('<input>').attr({
				    type: 	'hidden',
				    id: 	'residenzaFiscale'+j+'_int1_'+index,
				    name: 	'residenzaFiscale'+j+'_int1_'+index
				}).appendTo('#buyFundForm');
				
			}
			
		});
	}
	
	function conferma(){
		// buyFundConfirm.action o buyFromCartConfirm.action (1710)
		
		var tipoInvestimento = "PAC"
		var importo = $('#spinnerRataOut').val();
		var codicePiano = '', 
			numeroAnniPiano = '', 
			descrizionePianoPac = '',
			periodoPiano = '',
			anticipoRate='';
		
			if("S" == buyFundSelectBeanJson.pac){
//				if("S" == buyFundSelectBeanJson.fondosicav){
//					periodoPiano = $("#selectPeriodoOut").val();
//				}
//				periodoPiano = $("#selectPeriodoOut").val();
				
				var idx = '';
				var periodicitaJson = fundJson.periodicita[fundJson.acquisto.periodicita];
				var numeroratepianoArray = periodicitaJson.numeroratepiano.split(",");
				$.each(numeroratepianoArray, function(index, value){
					if(value == fundJson.acquisto.versamentiTotali) {
						idx = index;
						return false;
					}
				});
				
//				if("S" == buyFundSelectBeanJson.pac){
					numeroAnniPiano = periodicitaJson.numeroannipiano.split(",")[idx];
					tipoPiano = periodicitaJson.tipopiano.split(",")[idx];
					codicePiano = periodicitaJson.codicepiano;
					periodoPiano = fundJson.acquisto.periodicita;
//				}
				
				
//				var pianoReduced = $.parseJSON($('#selectPac :selected').val());
//				numeroAnniPiano = pianoReduced.numAnni;
//				tipoPiano = pianoReduced.tipoPiano;
//				codicePiano = pianoReduced.codicePiano;
				descrizionePianoPac = $('#selectPacOut').text();
				anticipoRate = fundJson.anticiporate;
//				anticipoRate = pianoReduced.anticipoRate;
//				if(	codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc 		 == buyFundSelectBeanJson.codiceSocieta || 	
//					codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc 		 == buyFundSelectBeanJson.codiceSocieta ||
//					codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta)
//			   	{
//			   		var periodo = $.parseJSON($('#selectPeriodo :selected').val());
//			   		codicePiano += periodo.id_periodo;
//			   	}
//				var periodo = $.parseJSON($("#descrizionePeriodo").val());
//				periodoPiano = periodo.id_periodo;
				periodoPiano = fundJson.acquisto.periodicita
				
			}
			
		 if(buyFundPreviewBeanJson.enableBuyNoEur){
			importo = $('#importoValuta').val();
		}
		
		$('#depositoValore').val($('#deposito').val());	//campo hidden x action di conferma
		$('#dirFissiValore').val($('#dirFissi').val());
		$('#dirittiCedolaValore').val($('#dirittiCedola').val());	//campo hidden x action di conferma
		$('#periodoCedolaValore').val($('#periodoCedola').val());
		$('#codiceFamiglia').val(buyFundSelectBeanJson.codiceFamiglia);
		$('#codIsin').val(buyFundSelectBeanJson.codisin);
//		$('#dataCambio').val($('#dataCambio').val());
		$('#isotmin').val(buyFundSelectBeanJson.isotmin);
		$('#isotsuc').val(buyFundSelectBeanJson.isotsuc);
		$('#iresmin').val(buyFundSelectBeanJson.iresmin);
		$('#speseGestioneValore').val($('#speseGestione').val());
		$('#speseIngressoValore').val($('#speseIngresso').val());
		$('#speseUscitaValore').val($('#speseUscita').val());
		$('#importo').val(importo);
		$('#tipoInvestimento').val(tipoInvestimento);
//		$('#numeroRatePiano').val($('#ratePac').val());
		$('#codicePiano').val(codicePiano);
		$('#numeroAnniPiano').val(numeroAnniPiano);
		
		$('#fondosicav').val(buyFundPreviewBeanJson.fondosicav);	//Fondosicav nel vecchio
//		$('#categoria').val(buyFundPreviewBeanJson.categoriaFondo);
		$('#navValore').val(buyFundSelectBeanJson.navDesc);
		$('#dataNavValore').val(buyFundSelectBeanJson.dataNavDesc);
		$('#nomeFondo').val(buyFundSelectBeanJson.nomeComparto);
		$('#descrSocietaGestione').val(buyFundPreviewBeanJson.societaGestione);
		$('#enableBuyNoEur').val(buyFundSelectBeanJson.enableBuyNoEur);
		$('#codInt').val(buyFundSelectRequestJson.codInt);
		$('#codiceFondo').val(buyFundSelectBeanJson.codiceComparto);
		$('#categoriaFondoValore').val(buyFundSelectBeanJson.categoriaFondo);
		$('#codiceSocietaDiGestione').val(buyFundPreviewBeanJson.codiceSocieta);
		$('#percScontoCom').val(buyFundSelectBeanJson.perScontoComm);
		$('#numeroAppropriatezza').val(buyFundPreviewRequestJson.numeroAppropriatezza);

		//PAC
//		$('#codicePiano').val(codicePiano);
//		$('#numeroAnniPiano').val(numeroAnniPiano);
//		$('#numeroRatePiano').val($('#ratePac').val());
		$('#numeroRatePiano').val(fundJson.acquisto.versamentiTotali);
		$('#periodoPiano').val(periodoPiano);
		$('#importoRata').val(importo);
		$('#importoPacSicav').val($("#investimentoIniziale").val());
		$('#descrizionePianoPac').val(descrizionePianoPac);
		$('#descrizionePeriodo').val($("#selectPeriodoOut").text());
		$('#numeroRateVersate').val($('#spinnerInizialeOut').val()); 
		$('#anticipoRate').val(anticipoRate);
		
		$('#cart').val(buyFundSelectRequestJson.cart);

		
		$('#numeroRiferimentoMifid').val(datiMifid.numeroRiferimento);
		var url = "BuyFundConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
		$('#buyFundForm').attr('action', url);
		$("#buyFundForm").submit();

	}
	
	function initializaBuyFundConfirm(inputData){
	        
		$.ajax({
			url: wrp_script_direct + "/investimenti/BuyFundConfirmJson.action" + "?cf=" + Math.random(),
        	dataType: "json",
            data: inputData	,
            success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
            			var msg = "Si &egrave; verificato un errore di connessione";
            			if(200 == jqXHR.status){
            				buyFundConfirmBeanJson = $.parseJSON(dataOutJSON.data.buyFundConfirmBeanJson);
            				buyFundConfirmRequestJson = $.parseJSON(dataOutJSON.data.buyFundConfirmRequestJson);
            				
            				if(buyFundConfirmBeanJson == undefined || buyFundConfirmBeanJson == null || buyFundConfirmBeanJson == ""){
            					$("#sezioneReipilogo,#sezioneDatiOrdine,#sezioneBtnContainer").hide();
            					 showError(true,"E",msg);
            				}
            				else if("failure" == buyFundConfirmBeanJson.action){
            					$("#sezioneReipilogo,#sezioneDatiOrdine,#sezioneBtnContainer").hide();
            					 showError(true,"E",buyFundConfirmBeanJson.errorMessage);
            				}
            				else{
            					//showError(false,null,null);
            				
            					buyFundConfirmBeanJson.fondiSicavDesc = ("F" == buyFundConfirmBeanJson.fondosicav)? "Fondo" : 
	       		 			 	 										("S" == buyFundConfirmBeanJson.fondosicav) ?  "Sicav" : "";
	            				buyFundConfirmBeanJson.dataNavDesc = $.datepicker.formatDate('dd/mm/yy', new Date(buyFundConfirmBeanJson.dataNAV));
	            				buyFundConfirmBeanJson.navDesc = buyFundConfirmBeanJson.nav.toLocaleString().split('.')[0].replace(/,/g,'.') + ',' + buyFundConfirmBeanJson.nav.toFixed(2).split('.')[1];
	//            				var divisa = buyFundConfirmBeanJson.divisa;
	            				var esitoOK = popolaEsito();
				        		if(esitoOK){
				        			popolaReipilogoDati(buyFundConfirmBeanJson);
				        			
				        			//solo in sezione dopo confirm
				        			if('9' == buyFundConfirmBeanJson.codiceFamiglia){
				        				$('#notaSpeseGestione').text(" (0,20% nel periodo di sottoscrizione)");
				        			}		
				        			
				        			popolaDettDestProventi(buyFundConfirmBeanJson);
				        			if(stringa_S == buyFundConfirmBeanJson.flagReinvestimento){
				        				$('#destProventi').text("Reinvestimento nel fondo/comparto");
				        			}
				        			else if(stringa_N == buyFundConfirmBeanJson.flagReinvestimento){
				        				$('#destProventi').text("Accredito in conto");
				        			}
				        			
				        			popolaOrdine(buyFundConfirmBeanJson);
				        			
				        			
				        			var hrefPtf = "javascript:document.location.href=";
//				        			if(19 == buyFundConfirmBeanJson.numeroBanca){
				        				hrefPtf += "wrp_script";
				        				hrefPtf += "+'/wbOnetoone/2l/action/investimenti/PortafoglioInvestimenti.action";
				        				hrefPtf += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf'";
//				        			}
//				        			else{
//				        				hrefPtf += "listaFondiSicavPortafoglio.do";
//				        				hrefPtf += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_il_mio_portaf";
//				        			}
				        			$("#portafoglio").attr("href",hrefPtf);
				        			
				        			var hrefSituazioneOrdini = "javascript:document.location.href=";
									hrefSituazioneOrdini += "wrp_script" + "+'/wbOnetoone/2l/action/FMP/investimenti/";
									hrefSituazioneOrdini += "SituazioneOrdiniFund.action";
									hrefSituazioneOrdini += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_situaz_ordini'";
									$("#situazioneOrdini").attr("href",	hrefSituazioneOrdini);
				        			
				        			var hrefNuovoFondo  = "javascript:document.location.href=";
				        			hrefNuovoFondo += "wrp_script";
				        			hrefNuovoFondo += "+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action";
				        			hrefNuovoFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto'"; //&OBSKEY3=nav_priv_wbx_acq_ricerca_vel
				        			$("#compraNuovoFondo").attr("href",hrefNuovoFondo);
				        			
				        		}
            				}
            			}
            			else{
            				$("#sezioneReipilogo,#sezioneDatiOrdine,#sezioneBtnContainer").hide();
            				showError(true,"E",msg);
            			}
            },
            error: function (jqXHR, status, errorThrown) {
            	var msg = "Si &egrave; verificato un errore di connessione";
            			$("#sezioneReipilogo,#sezioneDatiOrdine,#sezioneBtnContainer").hide();
                        showError(true,"E",msg);
            },
            complete: function(jqXHR, status){ 
//			            	if("success" == status){}
		        		$("#buyFundConfirm").removeClass("loading");
            }
		});
		
	}
	
	//visualizza box di successo / errore / warning
	function popolaEsito(){
		var titoloEsito='', testo1 = '', testo2='', testo3_1='', testo3_2='', testo3_3='', testo4='', testo5='';
		
		// check : condizione per errore / warning
		if(buyFundConfirmBeanJson!=null && 0 != buyFundConfirmBeanJson.numRegistrazione){
			
			$('#errorBorder').addClass("positivo");
			
			titoloEsito = "ORDINE INSERITO";
			
			testo1 = "Il numero di registrazione dell&#39;ordine &egrave; <strong>" + buyFundConfirmBeanJson.numRegistrazione + 
					 "</strong><br> A conferma dell&#39;ordine ti stiamo inviando anche <strong>una email.</strong>";
			
			testo2 = "L&#39;ordine sar&agrave; inviato";
			if("F" == buyFundConfirmBeanJson.fondosicav){
				testo2 += " alla societ&agrave; di gestione ";
			}
			else if("S" == buyFundConfirmBeanJson.fondosicav){
				testo2 += " al soggetto incaricato dei pagamenti ";
			}
			
			if(buyFundConfirmBeanJson.dataOperazione!=null && "" != buyFundConfirmBeanJson.dataOperazione){
				var dataOp = $.datepicker.formatDate('dd/mm/yy',$.datepicker.parseDate( "yymmdd", buyFundConfirmBeanJson.dataOperazione));
				testo2 += " il " + dataOp + " alle ore 18.00.";	
			}
			
			if(codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundConfirmBeanJson.codiceSocieta && 'AT' != buyFundConfirmBeanJson.codiceComparto){
				testo3_1 = 'Ti ricordiamo che dal 1&ordm; giugno 2012 la societ&agrave; Anima Sgr ha modificato gli importi dei diritti fissi (per maggiori dettagli consulta la tabella &#8220;costi e commissioni&#8221; presente nell&#39;area &#8220;la nostra offerta&#8221;).';
				
				testo3_2 = "Per ricevere da Anima SGR la contabile delle operazioni in formato elettronico anzich&eacute; cartaceo, &egrave; necessario inviare una richiesta scritta e firmata per email ad ANIMA SGR alla casella di posta elettronica <strong>clienti@animasgr.it</strong>, corredata di quanto segue:";
				testo3_2 += "<ul>"
				testo3_2 +="<li> indicazione in chiaro dell&apos;indirizzo mail del richiedente a cui inviare le future comunicazioni</li>";
				testo3_2 +="<li> fotocopia leggibile della carta identit&agrave; del richiedente (fronte e retro).</li>";
				testo3_2 += "</ul>"
				
				testo3_3 = "In alternativa,";
//				if(19 == buyFundConfirmBeanJson.numeroBanca){
					testo3_3 += " si potr&agrave; ";
//				}
//				else{
//					testo3_3 += " &egrave; possibile contattare la propria agenzia oppure ";
//				}
				testo3_3 += "inviare quanto sopra in originale tramite raccomandata alla sede legale di ANIMA Sgr, in Corso Giuseppe Garibaldi, 99 - 20121 Milano c.a. Supporto e servizi per i Clienti.";
			}
			
			testo4 = "Ti segnaliamo che in caso di vendita di quote di fondi/sicav e contestuale investimento in altri strumenti finanziari potrebbero generarsi scoperti sul conto corrente dovuti alle differenti date di valuta di accredito/addebito.";
			
			if(codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundConfirmBeanJson.codiceSocieta && "S" == buyFundConfirmBeanJson.polizza){
				testo5 = "Hai aderito";
				testo5 += " <strong>alla Polizza Infortunio Malattia offerta da Eurizon Capital Sgr</strong> ";
				testo5 += " che avr&agrave; effetto del 181&#x00b0; giorno successivo al versamento della prima rata del tuo pac, ";
				testo5 += " Eurizon Capital SGR ti spedir&agrave; una comunicazione per confermarti l'attivazione della copertura assicurativa.";
			}
			
			
			$('#titoloEsito').text(titoloEsito);
			$('#messaggio').html(testo1);
			$('#testoEsito2').html(testo2);
			$('#testoEsito3_1').html(testo3_1);
			$('#testoEsito3_2').html(testo3_2);
			$('#testoEsito3_3').html(testo3_3);
			$('#testoEsito4').html(testo4);
			$('#testoEsito5').html(testo5);
			
			return true;
		}
		else{
			$('#errorBorder').addClass("negativo");
			$('#titoloEsito').text("ORDINE NON INSERITO");
			$('#messaggio').html("Numero Registrazione non valorizzato");
			
			return false;
		}
	
		return false;
		
	}
	
	
	
	function popolaOrdine(jsonBean){
		$('#deposito').text(jsonBean.deposito);
		requestMargine(jsonBean.deposito, "true"); 
		
		var tipoPicPac = '';
		if("PIC" == jsonBean.tipoInvestimento){
			tipoPicPac = "unico acquisto (PIC)";
			
			var impValTxt = jsonBean.importo + ' EUR';
			if(jsonBean.enableBuyNoEur){
				impValTxt =   jsonBean.importoDivisa + ' ' + jsonBean.divisa + ' corrispondenti a ' 
							+ jsonBean.importovaluta + " EUR al cambio del " + jsonBean.dataCambio;
			}
			$('#importoPicOut').text(impValTxt);
			$('#bloccoPic').show();
			
		}
		else if("PAC" == jsonBean.tipoInvestimento){
			tipoPicPac = "piano di accumulo (PAC)";
			
			$('#selectPacOut').text(jsonBean.descrizionePianoPac);
			if( ("S" == jsonBean.fondosicav) || 
					("F" == jsonBean.fondosicav && 
					(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == jsonBean.codiceSocieta || 
					 codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == jsonBean.codiceSocieta)))	//&& 19 == jsonBean.numeroBanca
			{
				$('#selectPeriodoOut').text(jsonBean.descrizionePeriodo);
			}
			$('#spinnerRataOut').text(jsonBean.importoRata);
			
			var invTot = '';
			if("N" == jsonBean.anticipoRate){
				invTot = '(include vers. iniz.)';
			}
			$('#investimentoTotale').text(jsonBean.investimentoTotale + ' EUR ' + invTot);
			
			var impIniTxt = "Versamento iniziale", 
				iniOut = jsonBean.importo + " EUR (pari a " + jsonBean.rateVersate + " rate)",
				rateTxt = "Rate piano",
				invIni = jsonBean.rateResidue;
			
			if("F" == jsonBean.fondosicav && "N" != jsonBean.anticipoRate){
				impIniTxt = "Rate versate";
				iniOut 	  = jsonBean.rateVersate + " pari a " + jsonBean.importo + " EUR";
				rateTxt   = "Rate residue";
			}
			if("F" == jsonBean.fondosicav && "N" == jsonBean.anticipoRate){
				invIni = jsonBean.retetotali;	// check : rate non rete
			}
			
			$('#importoInizialeTxt').text(impIniTxt);
			$('#spinnerInizialeOut').text(iniOut);
			$('#rateTxt').text(rateTxt);
			$('#investimentoIniziale').text(invIni);
			
			$('#bloccoPac').show();
			
		}
		$('#isNotPac').text(tipoPicPac);
		
		$('#btnTempistiche').click(function() { 	
			Finance.tempistiche("AQ", jsonBean.codiceSocieta);
		});
		
	}
	
////Investimenti - Acquisto - end