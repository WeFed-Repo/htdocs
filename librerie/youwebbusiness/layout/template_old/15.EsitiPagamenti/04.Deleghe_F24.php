<!DOCTYPE html>
<!-- !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" -->
<html><head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/bootstrap.min.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/header-default.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb2014.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/essentials.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb-Business.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/alten.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/common.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/forms.css?v=1&amp;vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/layout.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/main.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/menu.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/stile.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/style.css?v=2&amp;vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/jquery-ui.1.11.4.css?vtm=10">
<script type="text/javascript" src="newstyle/js/jquery-1.9.1.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/jquery-ui.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/transactionMonitor/json2.js?vrsn=2?vtm=10"></script><script type="text/javascript" src="newstyle/js/alten.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/respond.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/tab.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/calendarTM.js?vtm=10"></script><script src="js/checkLibrary-ITA.js?v=13"></script><script src="newstyle/js/contextSelector.js?vrsn=4&amp;vtm=10"></script><script src="newstyle/js/utilita.js?vtm=10"></script><script src="newstyle/js/calendario.js?vtm=10"></script><script language="JavaScript">
			var stringa_tutti = 'TUTTI'
				
					function fillInput(){
						siaInput.value = fitToLength(getSiaCode(accounteerCombo, ""),0,5);
				    }
					
					function changeComboRevoca(){
						if((document.setfilter.STATO_DELEGA[document.setfilter.STATO_DELEGA.selectedIndex].value!="*")&&(document.setfilter.STATO_REVOCA[document.setfilter.STATO_REVOCA.selectedIndex].value!="*"))
							document.setfilter.STATO_REVOCA.selectedIndex = 0;
					}
					function changeComboDelega(){
						if((document.setfilter.STATO_DELEGA[document.setfilter.STATO_DELEGA.selectedIndex].value!="*")&&(document.setfilter.STATO_REVOCA[document.setfilter.STATO_REVOCA.selectedIndex].value!="*"))
							document.setfilter.STATO_DELEGA.selectedIndex = 0;
					}
					function doItBefore(){
						var selectOK = true;
						var popUpMsg = "";
						var isOk = true;
						if (!confrontaDate(document.setfilter.DA_DATA_SPEDIZIONE.value, document.setfilter.A_DATA_SPEDIZIONE.value))
						{
							popUpMsg = popUpMsg + "La data di spedizione iniziale deve essere minore di quella finale\n";
							selectOK = false;
						}
						if (!confrontaDate(document.setfilter.DA_DATA_ACCETTAZIONE_RIFIUTO.value, document.setfilter.A_DATA_ACCETTAZIONE_RIFIUTO.value))
						{
							popUpMsg = popUpMsg + "La data di accettazione iniziale deve essere minore di quella finale\n";
							selectOK = false;
						}
						if (!confrontaDate(document.setfilter.DA_DATA_PAGAMENTO.value, document.setfilter.A_DATA_PAGAMENTO.value))
						{
							popUpMsg = popUpMsg + "La data di pagamento iniziale deve essere minore di quella finale\n";
							selectOK = false;
						}
						
						if (!confrontaImporto(document.setfilter.DA_SALDO_DELEGA.value, document.setfilter.A_SALDO_DELEGA.value))
						{
							popUpMsg = popUpMsg + "Il saldo iniziale deve essere minore di quello finale\n";
							selectOK = false;
						}
						// Controllo se l'intestatario e' stato selezionato
						if ((document.setfilter.intestatario.selectedIndex == 0) && (document.setfilter.intestatario.value!= '*'))
						{ 
							popUpMsg = popUpMsg + "Occorre selezionare: Rag. Soc./Intestatario\n";
							selectOK = false;
						}
													
						if(selectOK)
						{
							checkAll('setfilter');
							if (isOkForm == true)
								return true;
							else
								return false;
						}
						else
						{
							alert(popUpMsg);
							return false;
						}
					}
					
					function setFilter(){
						if(!(doItBefore()))
							return false;
						if(!(checkForm('setfilter')))
							return false;
						else{
							setNumRecHidden();
							setFilterDefined();
							document.setfilter.submit();
							document.setfilter.visualizza.disabled = 'true';
						}
					}
					
					function gotoservlet1(url,title){
						dialogoCentratoWithScrolls(url, title, 700, 350);
					}
					
					function setNominativo(cf_piva){
						$("#CODICE_FISCALE").val(cf_piva);
					}
					
					function lookupcontribuentisearch(){
						if ($("[name='intestatario']").val() == "*")
						{
							alert("Scegliere l'intestatario.!");
							$("[name='intestatario']").focus();
						}
						else
						{
							gotoservlet1("lookupcontribuentisearch?intestatario="+$("[name='intestatario']").val(),"CercaNominativo");						
						}
					}
				
				//------------------------------------------------------------
				// VARIABILE UTILIZZATA DAL FILE "filtro.js"
				var msg_avanzate = 'Avanzate';
				//------------------------------------------------------------
			</script><script src="newstyle/js/filtro.js?vtm=10"></script>
			<style>
iframe {
    display: block;
    width: 100%;
    height: 600px;
    border: none;
    overflow: auto;
    overflow-y: scroll;
    overflow-x: hidden;
    /* min-height: 500px; */
}
</style>
</head>
<body>
	 <iframe id="iframecontent" src="strutt_iframe.php?iframe=15.EsitiPagamenti/iframe_delegheF24.php&cantiere=vr2" scrolling="yes"></iframe>
</body>
</html>