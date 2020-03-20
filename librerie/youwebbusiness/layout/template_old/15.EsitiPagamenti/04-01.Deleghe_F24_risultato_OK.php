<!DOCTYPE html>
<!-- !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" -->
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>elenco-disposizioni-F24</title><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/bootstrap.min.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/header-default.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb2014.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/essentials.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb-Business.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/alten.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/common.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/forms.css?v=1&amp;vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/layout.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/main.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/menu.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/stile.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/style.css?v=2&amp;vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/jquery-ui.1.11.4.css?vtm=10">
<script type="text/javascript" src="newstyle/js/jquery-1.9.1.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/jquery-ui.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/transactionMonitor/json2.js?vrsn=2?vtm=10"></script><script type="text/javascript" src="newstyle/js/alten.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/respond.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/tab.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/calendarTM.js?vtm=10"></script><script src="js/client.js"></script><script src="newstyle/js/utilita.js?vtm=10"></script><script src="newstyle/js/strings.js?vtm=10"></script>
<script language="JavaScript">
				var abi= '05034'
				var stringa_tutti = 'TUTTI'
			
				function docPost()
				{
					oneCheck = false;
					for (var i = 0; i < document.masterform.elements.length; i++)
					{
						if ((document.masterform.elements[i].type == "checkbox") && (document.masterform.elements[i].checked))
						{
							oneCheck = true;
							break;
						}
					}
					if (oneCheck)
					{
						document.masterform.first_item_count.value=1;
						document.masterform.action="revocadispof24";
						return true;
					}
					else
					{
						alert("Selezionare tutti i campi obbligatori");
						return false;
					}
				}
				
				function showDetailDelega(f24_id, tipo_f24)
				{
					if (f24_id.length > 0)
					{
						if(tipo_f24 == '104')
							dialogoCentratoWithScrolls("dettdelegaf24?dettaglio_delega_F24="+f24_id, "DettaglioF24", 700, 550);
						else
							dialogoCentratoWithScrolls("dettagliodelegaf24daesiti?id="+f24_id, "DettaglioF24", 700, 550);
					}
				}
				
				function showDetailRevoca(f24_id)
				{
					if (f24_id.length > 0)
					{
						dialogoCentratoWithScrolls("dettrevocaf24?id="+f24_id, "Dettaglio", 650, 320);
					}
				}
				
				function showDetailEsito(f24_id)
				{
					if (f24_id.length > 0)
					{
						dialogoCentratoWithScrolls("dettesitoaccettazionef24?id="+f24_id, "Dettaglio", 650, 360);
					}
				}
				
				function showDetailQuietanza(f24_id)
				{
					if (f24_id.length > 0)
					{
						dialogoCentratoWithScrolls("dettesitoquietanzaf24?id="+f24_id, "Dettaglio", 650, 400);
					}
				}
				
				function showSetFilter()
				{
					dialogoCentratoWithScrolls("filtroelencodispof24","Filtri", 550, 340);
				}
				
				function showSetFilterPrint()
				{
					dialogoCentratoWithScrolls("filtrostampaelencodispof24","Filtri", 550, 340);
				}
				
				function showPrintPreview()
				{
					window.open("", "Stampa Pdf","menubar=yes,scrollbars=yes,resizable=yes,width=600,height=300,dependend=yes");
					oldtarget=document.masterform.target;
					oldaction=document.masterform.action;
					document.masterform.target="Stampa Pdf";
					document.masterform.action="printpageelencodispof24";
					if (document.masterform.first_item_count != null)
					{
						oldfirst=document.masterform.first_item_count.value;
						oldnumbers=document.masterform.max_items_number.value;
						document.masterform.first_item_count.value="0";
						document.masterform.max_items_number.value="0";
					}
					document.masterform.submit();
					document.masterform.target=oldtarget;
					document.masterform.action=oldaction;
					if (document.masterform.first_item_count != null)
					{
						document.masterform.first_item_count.value=oldfirst;
						document.masterform.max_items_number.value=oldnumbers;
					}
				}
				
				function setItemPage(number)
				{ 
					document.masterform.max_items_number.value = number;
					document.masterform.first_item_count.value="1";
					document.masterform.submit();
				}
				
				function setColorItem()
				{
					if(is_ie4up)
					{
						document.all['item_10'].className	= 'testoBlackSmallBold';
						document.all['item_20'].className	= 'testoBlackSmallBold';
						document.all['item_50'].className	= 'testoBlackSmallBold';
						document.all['item_100'].className	= 'testoBlackSmallBold';
						document.all['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
					}
					else
					{
						document.links['item_10'].className	= 'testoBlackSmallBold';
						document.links['item_20'].className = 'testoBlackSmallBold';
						document.links['item_50'].className = 'testoBlackSmallBold';
						document.links['item_100'].className	= 'testoBlackSmallBold';
						document.links['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
					}
				}
							
				
				function getMatchingValue(filterName)
				{
					if (eval('document.masterform.'+filterName))
					{
						return eval('document.masterform.'+filterName+'.value');
					}
					else
					{
						return "";
					}
				}
				
				// PARTE FILTRI
				
				/*----Questa funzione deseleziona arbitrariamente tutti i checkBox che hanno come value 'delete'----- */
				function clearCheckBoxDelete()
				{
					for(var i=0; i<document.forms[0].elements.length; i++)
					{
						if(document.forms[0].elements[i].checked==1){
							document.forms[0].elements[i].checked=0;
						}
					}
				}	
						
				// Chiamata sull'onclick di 'Filtri'. Cambia la action della form.
				// Alla servlet del filtro sono passati tutti i parametri del filtro stesso.
				function onClickFilter() 
				{
					clearCheckBoxDelete();
					document.masterform.action="filtroelencodispof24";
					document.masterform.first_item_count.value="1";
					document.masterform.submit();
				}
				
				function resetFilter()
				{
					document.masterform.DA_DATA_SPEDIZIONE.value="";
					document.masterform.A_DATA_SPEDIZIONE.value="";
					document.masterform.DA_DATA_ACCETTAZIONE_RIFIUTO.value="";
					document.masterform.A_DATA_ACCETTAZIONE_RIFIUTO.value="";
					document.masterform.DA_DATA_PAGAMENTO.value="";
					document.masterform.A_DATA_PAGAMENTO.value="";
					document.masterform.DA_SALDO_DELEGA.value="";
					document.masterform.A_SALDO_DELEGA.value="";
					document.masterform.CODICE_FISCALE.value="";
					
					// Campi per il reset dei campi generali che sono in tutti gli elenchi
					document.masterform.filter_defined.value = 'false';
					document.masterform.intestatario.value="*";
					document.masterform.sia.value="";
					document.masterform.first_item_count.value="1";
					document.masterform.max_items_number.value="10";
					
					document.masterform.submit();
				}
				
				function doItBefore()
				{
					var selectOK = true;
					var popUpMsg = "";
					var isOk = true;
					
					// Controllo se l'intestatario e' stato selezionato
					if ((document.masterform.intestatario.selectedIndex == 0) && (document.masterform.intestatario.value != '*'))
					{ 
						popUpMsg = popUpMsg + "Occorre selezionare: Rag. Soc./Intestatario\n";
						selectOK = false;
					}		
					if(selectOK)
					{
						return true;
					}
					else
					{
						alert(popUpMsg);
						return false;
					}
				}
				
				var ImgEnabled = false;
				function setCtxFilter()
				{
					if(ImgEnabled){
						if(doItBefore()) {
							disableRefreshButton();
							document.masterform.first_item_count.value="1";
							document.masterform.submit();
						}
					}
				}
				
				function enableRefreshButton(){
					btEnable = new Image();
					btEnable.src = './newstyle/img/'+abi+'/refreshcontext-enabled.gif'
					if(document.images)
						document.images['refreshButton'].src = btEnable.src;
					ImgEnabled = true;
				}
				
				function disableRefreshButton(){
					btDisable = new Image();
					btDisable.src = './newstyle/img/refreshcontext-disabled.gif'
					if(document.images)
						document.images['refreshButton'].src = btDisable.src;
					ImgEnabled = false;
				}
				
				function fillInput()
				{
					siaInput.value = fitToLength(getSiaCode(accounteerCombo, ""),0,5);
				}
			// FINE PARTE FILTRI
			
			function showDetailQuietanzaPDF(f24_id,codice_iud)
			{
				var isFiscale = "&STAMPA_FISCALE=false";
				
				if (codice_iud != null && rtrim(codice_iud).length > 0)
				{
					isFiscale = "&STAMPA_FISCALE=true";
				}
				
				urlDummy = "./html/dummy.htm"
				document.stampapdfquietanzadematerializzata.action = "stampapdfquietanzadematerializzata?ID_DELEGA=" + f24_id +isFiscale;
				myWin=window.open(urlDummy, "stampapdfquietanzadematerializzata", "height=520,width=770,resizable=yes,scrollbars=yes,screenX=10,screenY=10,dependent=no");
				waitingMessagePdf(myWin);
				document.stampapdfquietanzadematerializzata.submit();
			}
			
			
			
		</script><script src="js/contextSelector.js?vrsn=4"></script><script src="js/filtro.js"></script><script>
			
				initializeContextSelectorLibrary(parent.context);
				var accounteerCombo = null;
				var siaInput = null;
			
		</script></head>
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
<body>
	 <iframe id="iframecontent" src="strutt_iframe.php?iframe=15.EsitiPagamenti/iframe_delegheF24_ok.php&cantiere=vr2" scrolling="yes"></iframe>
</body>
</html>