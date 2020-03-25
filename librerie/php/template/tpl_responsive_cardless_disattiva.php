
<!DOCTYPE html>


		





<html lang="it">
<head>
	<meta charset="utf-8">
	<title>Webank (area privata)</title>
	<meta name="description" content="Webank"/>
	<meta name="WT.dcsvid" content="AsCXmaD2wdrl0/0BGeK3C/rhPdSQe3N4q3rIx3w1vHw=" />
	
		<script language="javascript" type="text/javascript">
			var currentTab = 'nav_priv_wbx_sportello';
			var tabId = 'nav_priv_wbx_sportello';
			var obsKey = 'nav_priv_wbx_gestione_cardless';
	
			var imgPath = '/img/ret/';
			var sitoOrdinal = '3';
			var area = '1';
			var cgi_protocol = 'https://';
			var cgi_host = 'webanksvi7web.webank.local';
			var cgi_script = '/webankpri';
			var cgi_serverurl = 'https://webanksvi7web.webank.local';
			var tibco_code = '37353372756e3c6480989279829c976d678b64a579a9707b9b484634486567693a493c38624048766860663e6d';
			var sole_24h = 'http://212.45.97.34/XpLogonManager/WeService/loginWS.asp';
			var bpm_mailurl = 'http://domino5.weservice.new/';
			var bpm_mailurl_ssl = 'http://domino5.weservice.new/';
			var ftCode = 'B516W540P561E5';
			var cryp_adb = 'A18M30R35C20Q';
			var green_number = '800 060 070';
			var international_number = '+39 02 43371293';
			var dataUltimaModifica = '16/03/2016';
			var dbgLvl = 2;
			var sitocarte = 'to be defined';
			var carteBanca = 'to be defined';
	
			var tasso = '0,00';
			var tassoMeExtraFido = '7,00';
			var tassoMeInf = '0,00';
			var tassoMeSup = '0,00';
			var tassoMeTraderExtraFido = '7,00';
			var tassoMeTraderInf = '0,25';
			var tassoMeTraderSup = '0,00';
			var tassoMyBusinessExtraFido = '7,00';
			var tassoMyBusinessInf = '0,00';
			var tassoMyBusinessSup = '0,00';
			
			var costoAttivazione = '15';
			
			var tasso_conv = tasso.replace(/\,/g, ".");
			var tan = 4.5 + parseFloat(tasso_conv);
			var utilizzo = (10 * tan) / 12;		
			var isc = tan * 1.0227;
	
			//nuovi valori formattati a 3 deciamli
			var tassoFidoMe_3d = '4,500';
			var deltaFidoMe_3d = '4,500';
			var taegFormat_3d = '4,922';
	
			var deltaFidoMe = '4,50';
			var dataModificaFido = '16/03/2016';
			var tassoFido = '4,50';
			var costoUtilizzoFidoMe = '16,88';
			var giorniUtilizzoFidoMe = '90';
			var tassoIscMe = '4,60';
			var deltaIsc = '1,02';
			var importoUtilizzo = '1.500,00';
	
			var costoSpedCorriere = '7,50' + ' &euro;';
			var costoSpedRaccomandata = '5,00' + ' &euro;';
			var msprefix = '/4tk21g96bx';
			
			var fine_mese_succes = '31/12/2017';
			
			var fine_2mesi_suc = '31/01/2018';
	
			var _waitHtml = '<div class=\"message\">&nbsp;&nbsp;<p>Richiesta in corso...</p>&nbsp;&nbsp;<img src=\"/img/ret/loading.gif\" /></div>';
			
			var isRidOnlySddGest = true;
			var dataTermineSDD = '1&deg; maggio 2014';
			var isDip = false;
			var isSocio = false;
			var homePage = 'nav_priv_wbx_sportello' ;

			function getRidOnlySddGest(){ return isRidOnlySddGest; }
			
			function getDataTermineSDD(){ return dataTermineSDD; }
	
			function getSito() { return sitoOrdinal; }
	
			function getArea() { return area; }
	
			function getTaeg_3d() { document.write(taegFormat_3d); }
	
			function getDeltaFidoMe_3d() { document.write(deltaFidoMe_3d); }
	
			function getTassoFidoMe_3d() { document.write(tassoFidoMe_3d); }
	
			function getTasso() { document.write(tasso); }
	
			function getTassoMeExtraFido() { document.write(tassoMeExtraFido); }
	
			function getTassoMeInf() { document.write(tassoMeInf); }
	
			function getTassoMeSup() { document.write(tassoMeSup); }
	
			function getTassoMeTraderExtraFido() { document.write(tassoMeTraderExtraFido); }
	
			function getTassoMeTraderInf() { document.write(tassoMeTraderInf); }
	
			function getTassoMeTraderSup() { document.write(tassoMeTraderSup); }
	
			function getTassoMyBusinessExtraFido() { document.write(tassoMyBusinessExtraFido); }
	
			function getTassoMyBusinessInf() { document.write(tassoMyBusinessInf); }
	
			function getTassoMyBusinessSup() { document.write(tassoMyBusinessSup); }
	
			function getOwnerBank() { document.write('Webank'); }
	
			function getShortBank() { document.write('Webank'); }
	
			function getExtendedBankName() { document.write('Webank'); }
	
			function getDataUltimaModifica() { document.write(dataUltimaModifica); }
	
			function getTassoTan() { document.write(Math.round(tan * 100) / 100); }
	
			function getTassoIsc() { document.write(Math.round(isc * 100) / 100); }
	
			function getUtilizzo() { document.write(Math.round(utilizzo * 100) / 100); }
	
			function getGreenNumber() { document.write(green_number); }
	
			function getInternationalNumber() { document.write(international_number); }
	
			function getSitoCarte() { document.write(sitocarte); }
	
			function getCarteBanca() { document.write(carteBanca); }
	
			function getUrlCarteBanca() {
				url = "<a href=http://" + sitocarte + " target='blank'>" + sitocarte + "</a>"; 
				document.write(url);
			}
	
			function getDeltaFidoMe() { document.write(deltaFidoMe); }
	
			function getDataModificaFido() { document.write(dataModificaFido); }
	
			function getTassoFido() { document.write(tassoFido); }
	
			function getCostoUtilizzoFidoMe() { document.write(costoUtilizzoFidoMe); }
	
			function getGiorniUtilizzoFidoMe(){ document.write(giorniUtilizzoFidoMe); }
	
			function getTassoIscMe() { document.write(tassoIscMe); }
	
			function getDeltaIsc() { document.write(deltaIsc); }
	
			function getImportoUtilizzo() { document.write(importoUtilizzo); }
	
			function getCostoSpedCorriere() { document.write(costoSpedCorriere); }
	
			function getCostoSpedRaccomandata() { document.write(costoSpedRaccomandata); }
	
			function getDateProxMonth() { document.write(fine_mese_succes); }
	
			function getDateProx2Months() { document.write(fine_2mesi_suc); }
			
			function getScontoEuropAss() {
				var sconto = 10;
				if ((isDip)||(isSocio)){
					sconto = 15;
				}
				document.write(sconto);
			}	
			
			function getCostoAttivazione(){ document.write(costoAttivazione); }
			
		</script>

		<!-- START OF SmartSource Data Collector TAG v10.4.23 -->
		<!-- Copyright (c) 2016 Webtrends Inc.  All rights reserved. -->
		<script>
			window.webtrendsAsyncInit=function(){
				var dcs=new Webtrends.dcs().init({
					dcsid:"dcs2226sx2dkih124quzg2g0v_1b7g",
					domain:"statse.webtrendslive.com",
					timezone:1,
					i18n:true,
					offsite:true,
					download:true,
					downloadtypes:"xls,doc,pdf,txt,csv,zip,docx,xlsx,rar,gzip",
					anchor:true,
					javascript: true,
					onsitedoms:"webank.local",
					fpcdom:".webank.local",
					plugins:{
						hm:{src:"//s.webtrends.com/js/webtrends.hm.js"},
						facebook:{src:"//s.webtrends.com/js/webtrends.fb.js"},
						yt:{src:"//s.webtrends.com/js/webtrends.yt.js"}
					}
				}).track();
			};
			(function(){
				var s=document.createElement("script"); s.async=true; s.src="/wscmn/js/wth/webtrends.js";
				var s2=document.getElementsByTagName("script")[0]; s2.parentNode.insertBefore(s,s2);
			}());
		</script>
		<noscript><img alt="dcsimg" id="dcsimg" width="1" height="1" src="//statse.webtrendslive.com/dcs2226sx2dkih124quzg2g0v_1b7g/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=10.4.23&amp;dcssip=www.webank.local"/></noscript>
		<!-- END OF SmartSource Data Collector TAG v10.4.23 -->

		













<!-- MOBILE -->
<!-- <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"> -->
<!-- Allows fullscreen mode from the Homescreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Sets the color of the text/battery, wireless icons etc -->
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>
<meta name="format-detection" content="telephone=no">
<!-- / MOBILE -->

<!-- FAVICON -->
<link rel="icon" href="/favicon.ico">
<link rel="manifest" href="/fe/img/manifest.json">
<meta name="apple-mobile-web-app-title" content="Webank">
<meta name="application-name" content="Webank">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/fe/img/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- / FAVICON -->

<!-- CSS -->
<!-- Css base -->
<link href="/wscmn/fe/css/priv_base_webank.css?a=434" rel="stylesheet" type="text/css" media="all">
<!-- Css strutturale -->
<link href="/wscmn/fe/css/priv_struttura_webank.css?a=434" rel="stylesheet" type="text/css" media="all">


<!-- Css nuovi responsive-->
<link href="/wscmn/fe/css/priv_generic_webank.css?a=434" rel="stylesheet" type="text/css" media="all" >
<link href="/wscmn/fe/css/priv_generic_fixed.css?a=434" rel="stylesheet" type="text/css" media="all">
<link href="/wscmn/fe/css/priv_print_webank.css?a=434" rel="stylesheet" type="text/css" media="print">
<!-- / CSS -->


<script type="text/javascript">
//INIZIO MODIFICHE RESPONSIVE
// Variabili per ambiente, riporta le chiavi del navigatore selezionate

	var navIndex = ['nav_priv_wbx_sportello', 'nav_priv_wbx_versamenti_prelievi', 'nav_priv_wbx_prelievo_cardless'];

var sectionTitle = "Prelievo Cardless";
// FINE MODIFICHE RESPONSIVE
</script>

<!-- JS -->
<script type="text/javascript" src="/webankpri/wbOnetoone/wbblack/commons/generateMenuData.jsp"></script>
<script type="text/javascript" src="/wscmn/fe/js/jquery.js?a=434"></script>
<script type="text/javascript" src="/wscmn/fe/js/bootstrap.min.js?a=434"></script>
<script type="text/javascript" src="/wscmn/fe/js/priv_generic.js?a=434"></script>
<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_generic.js?a=434"></script>
<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_utilities.js?a=434"></script>
<script type="text/javascript" src="/wscmn/fe/js/bootstrap-table.js?a=434"></script>

<!-- /JS -->
<!-- JS di compatibilita' generica condizionato -->
<!--[if lte IE 9]>
	<script type="text/javascript" src="/wscmn/fe/compat/js/priv_old.js"></script>
<![endif]-->

<!-- vecchi import riportati temporaneamente per far funzionare alcune pagine -->
<script type="text/javascript" src="/wscmn/js/common_validation.js?a=434"></script>
<!-- fine vecchi import riportati temporaneamente -->
	
		
		<!--DOVE SONO = app02svi7:webank700 -->
	</head>

	




<body class=" ">
	





		
	<!-- HEADER -->
	<header class="headerFixed">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="printlogoNew">
				<img src="/img/ret/logo_print.gif">
			</div>
			<!-- HEADER DESKTOP -->
			<div class="row hidden-xs hidden-sm no-gutter-left">
				<div class="col-md-3 col-md-offset-0 ">
					<div id="logoWrap">
						<a href="/webankpri/wbOnetoone/myHome.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_myhome"><img src="/fe/img/logo_bank.png"></a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="userMenu">
						<ul class="userMenuConsole">
							<li><a class="userMenuLink telLink" href="tel:800060070"><i class="icon icon-numeroverde_desktop"></i><span class="userMenuLabel">800 060 070</span></a></li>
						
							<li><a class="userMenuLink" href="/webankpri/wbOnetoone/chiudi_servizio.jsp?"><i class="icon icon-esci_desktop"></i><span class="userMenuLabel">Esci</span></a></li>
						</ul>
						<ul class="userMenuInfo">
							<li class="nameConto"><span>Attilio Mario Castellini</span></li>
						
							<li><a href="javascript:callJSP('/wbOnetoone/2l/action/banking/WsChangePersonalData0.action',null,'tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_domicilio_residenza_599');"><i class="icon icon-imieidati_desktop"></i><span>I miei dati</span></a></li>
						
							<li><a href="javascript:callJSP('/wbOnetoone/2l/action/sms/alertAttivi.action',null,'tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sms_elenco_alert');"><i class="icon icon-alert_desktop"></i><span>Alert</span></a></li>
						
							<li><a href="javascript:callJSP('/wbOnetoone/2l/action/wbOnetoone/schedaProdotto.action', null,'tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sicur_di_wb');"><i class="icon icon-sicurezza_desktop"></i><span>Sicurezza</span></a></li>
						</ul>
					</div>
					<ul id="userMenuMobile">
						<li><span class="nameConto">Attilio Mario Castellini</span></li>
						
							<li><a href="javascript:callJSP('/wbOnetoone/2l/action/banking/WsChangePersonalData0.action',null,'tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_domicilio_residenza_599');"><span>I miei dati</span><i class="icon icon-imieidati_mobile"></i></a></li>
						
							<li><a href="javascript:callJSP('/wbOnetoone/2l/action/sms/alertAttivi.action',null,'tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sms_elenco_alert');"><span>Alert</span><i class="icon icon-alert_mobile"></i></a></li>
						
							<li><a href="javascript:callJSP('/wbOnetoone/2l/action/wbOnetoone/schedaProdotto.action', null,'tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sicur_di_wb');"><span>Sicurezza</span><i class="icon icon-sicurezza_mobile"></i></a></li>
						
							<li><a href="/webankpri/wbOnetoone/chiudi_servizio.jsp?"><span>Esci</span><i class="icon icon-esci_mobile"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- / HEADER DESKTOP -->
			
			<!-- HEADER MOBILE -->
			<div class="headerMobile">
				<div class="row hidden-md hidden-lg no-gutter">
					<div class="col-xs-2">
						<a class="headbtn menuopen btn-icon"><i class="icon icon-menu"></i></a>
						<a class="headbtn logoicon hidden-xs" href="/webankpri/wbOnetoone/myHome.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_myhome"><img src="/fe/img/logo_small.png" /></a>
					</div>
					<div class="col-xs-8">
						<span id="logomyhome" onclick="document.location.reload(true);"><img src="/fe/img/logo_mobile.png"></span>
						<span id="sectionName" onclick="document.location.reload(true);"><script type="text/javascript">getCodeOf(sectionTitle);</script></span>
					</div>
					<div class="col-xs-2">
						<a class="headbtn usermenuopen btn-icon"><i class="icon icon-user"></i></a>
					</div>
				</div>
			</div>
			<!-- / HEADER MOBILE -->
		</div>
	</div>
	</header>
	<!-- / HEADER -->
	<!-- MENU -->
		<nav>
	<div class="wrapper">
		<ul class="level1">
			<script type="text/javascript">getCodeOf(structure.menuDesktop.lev1);</script>
		</ul>
		<ul class="level2">
			<script type="text/javascript">getCodeOf(structure.menuDesktop.lev2);</script>
		</ul>
		<div class="clear"></div>
	</div>
</nav>
<!-- FINE MENU -->

			

	<!-- TOOLBOX -->
	















<script type="text/javascript">
function getUnreadMessageCount() {
	$.ajax({
		type: "POST",
		url: cgi_script + "/wbOnetoone/wbblack/commons/boxes/ajax/getUnreadMailCount.jsp",
		data: { cf: Math.random()}
	}).done(function( msg ) {
		if (msg.messageCount > 0) {
			$('#numeroMessaggiNonLetti').html(msg.messageCount);
			$('#numeroMessaggiNonLetti').show();
		} else {
			$('#numeroMessaggiNonLetti').hide();
		}
	});
}
</script>
<div id="toolbox" class="">
	<div id="toolwrap">
		<div id="toolhandle"><a class="btn-icon"><i class="icon icon-ellipsis-h"></i></a></div>
		<div id="toolcontainer">
			<!-- Vari tool -->
		
				<!-- ASSISTENTE VIRTUALE -->
				<div id="virtAss" style="display:none">
					<div id="vaExtended" style="display:none">
						<div class="vaExtTop">
							<a href="javascript:;" id="vaLinguetta" title="Espandi"></a>
						</div>
						<div id="vaExtConsole" style="display:none">
						</div>
						<div class="vaExtBody"></div>
					</div>
					<div class="vaContainer">
						<div class="vaTop">
							<span id="vaTitle">Paolo, l'assistente virtuale</span>
							<a href="javascript:;" class="vaChiudi" title="Chiudi">&nbsp;</a>
							<a href="javascript:;" class="vaWindow" title="Espandi/Riduci">&nbsp;</a>
						</div>
						<div class="vaFiletto" style="display:none"></div>
						<div class="vaBody">
							<div id="vaSpace"></div>
							<div class="vaConsole">
								<a href="javascript:;" class="vaAudio" title="Mute on/off"></a>
								<div id="vaSlider">
									<a href="javascript:;" id="vaSliderCursor" title="Volume"> </a>
								</div>
								<a id="vaTextControl" href="javascript:;"></a>
							</div>
							<div id="vaDialog">
							</div>
							<form autocomplete="off" id="vaFormTag" action="javascript:;" method="post">
							<div id="vaForm">
								<input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="fammi una domanda..." />
								<a title="Chiedi" class="btnformright" href="javascript:;" id="vaAsking"><img alt="Chiedi" src="/img/ret/btn_left_ar.gif" /><span>chiedi</span><img alt="" src="/img/ret/btn_right_ar.gif" /></a>
							</div>
							</form>
							<br class="clear" />
						</div>
						<div class="vaBottom"></div>
					</div>
				</div>
				<script type="text/javascript" src="/wscmn/js/ret/priv_va.js"></script>
				<script type="text/javascript">
						vaFirstCall = true;
				</script>
				<!-- FINE ASSISTENTE VIRTUALE -->
		
		
		

			







	
	<div class="tool" id="tool2" style="display:none;">
		<div class="toolhead">
			<span class="tooltit handle"></span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
		</div>
		<div id="formtbxCallMeBack" class="toolmiddle" style="height:auto;">
			<p>
				Gentile Cliente, il servizio non &egrave al momento disponibile.<br><br>
	            Puoi contattare il servizio clienti al numero 800 060 070 o chiedere a Paolo.<br><br>
	            Ci scusiamo per il disagio.
	        </p>
        </div>
        <div class="toolfooter"></div>
	</div>

					

		</div> <!-- end tool container -->
		
		<!-- Pulsantiera -->
		<ul id="toolbtns">
			
			<li class="toolbtn"><a href="javascript:;" title="Assistente virtuale" class="icon" id="toolbtnpaolo" data-toolid="virtAss"><img src="/wscmn/fe/img/priv_tool_paolo.png"></a></li>
			
			<li class="toolbtn"><a href="javascript:callJSP('/wbOnetoone/extfpHelpCenter.do', null, 'tabId=nav_priv_wbx_helpcenter&OBSKEY=nav_priv_wbx_helpcenter')" title="Servizio clienti" class="icon icon-helpcenter" ></a></li>
			
			<span id="vvcButton" class="testchat"></span>
			
			<li class="toolbtn"><a href="javascript:;" title="Webank ti richiama" class="icon icon-prenota" id="toolCmbBtn" data-toolid="tool2"></a></li>
			<li class="toolbtn"><a href="/webankpri/wbOnetoone/2l/jsp/wbOnetoone/resp/wbblack/contents/hc/eMail.action?OBSCNT=TAB&tabId=nav_priv_wbx_helpcenter&OBSKEY=nav_priv_wbx_scrivi&OBSKEY3=nav_priv_wbx_scrivi" title="Scrivici" class="icon icon-scrivici"></a></li>
			
		</ul>
	</div>
</div>

	<script type="text/javascript">
		$(function () {
			var toolbox = $('#toolbox'),
				toolbtnArr = $('#toolbtns .toolbtn');
			$('#toolhandle').click(function () {
				if (toolbox.hasClass('compact')) {
					toolbox.removeClass('compact expanded');
					toolbtnArr.removeClass('selected');
				} else {
					toolbox.addClass('compact');
				}
			});
			toolbtnArr.click(function () {
				var toolbtn = $(this);
				if (toolbox.hasClass('expanded')) {
					if (toolbtn.hasClass('selected')) {
						toolbox.removeClass('expanded');
						toolbtnArr.removeClass('selected');
					} else {
						toolbtnArr.removeClass('selected');
						toolbtn.addClass('selected');
					}
				} else {
					toolbtnArr.removeClass('selected');
					toolbtn.addClass('selected');
					toolbox.addClass('expanded');
				}
			});
		});
	</script>

<script language="javascript" type="text/javascript">
	function openAppuntAgenzia(){
		$("#appAgenziaTbx").show();
		$("#contentOK").hide();
		$("#contentKO").hide();
		opentool(9);
	}
	function openAppuntAgenziaWebank(){
		viewForm();
		opentool(9);
	}
	function openChat(){
		window.open('nullChatWbxPriv.asp?username=0016807&sito=3', 'Chat', 'width=210,height=180,resizable=false');
	}
	function openCloseChat(){
		window.open('/webankpri/wbOnetoone/chat_chiusa.jsp?', 'Chat', 'width=186,height=323,resizable=false');
	}
	function openChatEsperto(){
		window.open('nullChatWbxPrivEsp.asp?username=0016807&sito=3&Esperto=yes', 'ChatEsperto', 'width=186,height=323,resizable=false');
	}
			
</script>

<!--Nuova Chat Egain true-->
<!--Nuovo Assistente virtuale false-->
	<!-- FINE TOOLBOX -->
	<div class="scrollable">
		<!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
		<div id="main">
			<div class="wrapper">
			<div class="container-fluid">
					<!-- WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
					<div class="row">
						



<!-- SPALLA SINISTRA : MENU DI TERZO/QUARTO LIVELLO -->
<div id="leftmenu" class="col-sm-12 col-md-2">

	<!-- STRUTTURA DI NAVIGAZIONE DEL MENU DI TERZO LIVELLO DA UTILIZZARE -->
	<h2>Prelievo Cardless</h2>
<ul>

<li ><a href="/webankpri/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_info_richiesta&OBSKEY3=nav_priv_wbx_scheda_prod_prelievo_cardless">Info e richiesta Prelievo Cardless</a></li>

<li class="selected"><a href="/webankpri/wbOnetoone/3l/action/nsf/WsCardlessHistoryRequest.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_gestione_cardless&OBSKEY3=nav_priv_wbx_elenco_prelievi_cardless">Gestione Prelievo Cardless</a></li>
	</ul>

	<!-- FINE DELLA STRUTTURA DI NAVIGAZIONE -->


		














				



</div>
<!-- FINE DELLA SPALLA SINISTRA-->


 
	
					

						






<div id="contenuti" class="contenuti col-sm-12 col-md-10 resp">

	<script type="text/javascript">
		var larghezza = 980;
		var frames = new Array();
		var principale = new Object();
	
		frames[0] = top;
		frames[1] = top;
	
		function getPrincipale() {
			return principale;
		}

		function setPrincipale(p) {
			principale = p;
			principale.document = p;
			frames[2] = principale;
		}
	</script>

	<h2>Gestione Prelievo Cardless</h2>

	<br class="clear">
			

	<div class="navfrontPage outerTab">
		<div class="innerTab">
			<ul class="newLabel">

				<li class="" id="box5tab1"><a href="/webankpri/wbOnetoone/3l/action/nsf/WsCardlessHistoryRequest.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_gestione_cardless&OBSKEY3=nav_priv_wbx_elenco_prelievi_cardless" title="elenco prelievi cardless">elenco prelievi cardless</a></li>
			
				<li class="on" id="box5tab2"><a href="/webankpri/wbOnetoone/3l/action/nsf/WsCardlessDeactivationRequest.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_gestione_cardless&OBSKEY3=nav_priv_wbx_disattivazione_cardless" title="disattivazione">disattivazione</a></li>
			
				<li class="" id="box5tab3"><a href="/webankpri/wbOnetoone/3l/action/nsf/NewTrackingPratica.action?functionTrack=Cardless&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_gestione_cardless&OBSKEY3=nav_priv_wbx_tracking" title="stato pratica">stato pratica</a></li>
			
			</ul>
		</div>
		<div class="separator"></div>
	</div>

	<div id="box5ctntab2" style="visibility: visible;">
		<div class="fooform" id="id_aggiorna_tab" style="display:none;"></div>












 



























				 






<script type="text/javascript">

	function sendPush(button) {
		var url = cgi_script + '/nsf/CardlessActivationSendPush.action',
		parameters = $('#formrichiesta1').serialize(true),
		successFunc = function(esito) {
			if(esito.code == 'ok') {
				if(esito.hasApp == 'true') 
					$('#btnProsegui').click();
				else 
					esegui();
			}
		},
		failureFunc = {};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	}
	
	function pin2render(id) {
		var url = cgi_script + '/nsf/Pin2AjaxRender.action?',
		parameters = {},
		successFunc = function (resp) {
			$('#' + id).html(resp);
		},
		failureFunc = function () {};
		jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
	}
	
	function esegui() {
		$('#autorizzazionePush').removeClass('fade');
		$('#errorsSection').hide();
		do_preValidations();
		$('#pin32Div').addClass("loading");
		var url = cgi_script + '/nsf/DeactivateCardlessByAccount.action',
		parameters = $('#formrichiesta1').serialize(true),
		successFunc = function (esito) {
			$('#pin32Div').removeClass("loading");
			 if(esito.code == 'ok') {
				$('#riepilogoAccountId').html($('#accountId').val());
				$('#pin32Div').hide();
				$('#boxEsitoPositivo').show();
			} else if (esito.esito == 'ko_alert')  {
				addValidationError("",esito.info.messaggio,true);
				$('#errorsSection').show();
				setElementonView($('#errorsSection'));
				
					checkPin2Data(esito);
					$('#autorizzazionePush').modal('show');
				
			} else {
				$('#riepilogoAccountId').html($('#accountId').val());
				$('#pin32Div').hide();
				$('#boxEsitoNegativo').show();
			}
		},
		failureFunc = function () {
			$('#pin32Div').removeClass("loading");
			$('#pin32Div').hide();
			$('#boxEsitoNegativo').show();
		};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	}
	
	function checkPin2Data(esito){
	    resetErrors('#bloccoGenerazioneManuale');
	    var errors = [];

	    errors.push({ field: $('#codiceotp'), text: esito.messaggio });
	    
	    if (errors.length > 0)  {
	      setHasErrors(errors, "#bloccoGenerazioneManuale");
	      return false;
	    }
	    
	    return true;
	  }
	
</script>






	












<!-- === org.apache.jsp.banking.errorsSectionResponsive_jsp === { -->

	<div id="errorsSection" style="display: none;">
		<div class="boxesito negativo">
			<i class="icon icon-alert_error icon-2x"></i>
			<div class="text">
				<div class="row">
					<div class="col-sm-10" escape="false">
								

							
						
						<ul id="errorMessages"></ul>
							
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- } === org.apache.jsp.banking.errorsSectionResponsive_jsp === -->

<div class="boxesito attenzione">
 <i class="icon icon-alert_caution icon-2x"></i>
    <div class="text">
        <div class="row">
            <div class="col-sm-12">
                <p>
					A seguito della fusione che ha dato vita al Gruppo Banco BPM, si rende necessario unificare progressivamente i sistemi informatici.
					<br>
					<br>
					Per questo motivo potrai utilizzare il servizio Prelievo Cardless fino al 19/07/2017.
                </p>
            </div>
        </div>
    </div>
</div>

<p>
	Puoi <strong>disattivare</strong> il servizio Prelievo Cardless gratuitamente e in qualsiasi momento.
	<br/>Per riattivare il servizio dovrai inoltrarci <strong>una nuova richiesta</strong>, sottoscrivendo un nuovo contratto.
</p>
</br>

<form id="formrichiesta1" autocomplete="off">









<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_gestione_cardless" />

<input name="OBSKEY3"	type="hidden"	value="nav_priv_wbx_disattivazione_cardless" />

<input name="OBSCNT"	type="hidden"	value="" />
<input name="cf"	type="hidden"	value="0.7077394801394806" />
<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
<input name="siglaAzione"	type="hidden"	value="" />

 

<input type="hidden" name="otp" id="hiddenOtp" value="" />

<input type="hidden" name="tipoRichiesta" value="disattivazione">

<div class="formGenerico borderFormRounded">
	<div class="form-group">
	   <div class="row">
	   		<div class="col-sm-6">
	            <label class="control-label">Intestatario</label>
	            <span class="output">ATTILIO MARIO CASTELLINI</span>
        	</div>
        
	   		<div class="col-sm-6">
				<label class="control-label">Conto di appoggio</label>
				<div class="form-inline">
					<div class="input-group" id="riepilogoAccountId">
						





<!-- === org.apache.jsp.banking.resp.accountsListSelect_jsp === { -->
	
	
		<select class="form-control" size="1" name="accountId"  id="accountId" onchange="updateStarStatus(this, 'accountId_star')" >
		<option value="01099 - 0000072608 - EUR" selected="selected" accountId="01099 - 0000072608 - EUR" accountIdToShow="CC 01099 0000072608 EUR">
				CC 01099 0000072608 EUR
		</option>
		<option value="01099 - 0000078689 - EUR"  accountId="01099 - 0000078689 - EUR" accountIdToShow="CC 01099 0000078689 EUR">
				CC 01099 0000078689 EUR
		</option>
	</select>

	<script type="text/javascript">
		function  updateStarStatus(selectEl, starId) {
			var  accountId = selectEl.options[selectEl.selectedIndex].getAttribute('accountId');
			var  accountIdToShow = selectEl.options[selectEl.selectedIndex].getAttribute('accountIdToShow');
			updateStar(accountId, accountIdToShow, starId);
		}
	</script>
	<div class="input-group-addon">
	<a title="La stella indica il conto che hai impostato come preferito" class="btn-icon" href="javascript:openStarAlert2('01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR')" data-animation="false" id="accountId_star_el" >
		<i class="icon icon-star_fill" id="accountId_star_img"></i>
	</a>
</div>
<script src="/wscmn/js/Star.js"></script>
<script type="text/javascript">
	var  preferredAccountId = '01099 - 0000072608 - EUR';

	if (typeof(StarsManager.getStar('accountId_star')) == 'undefined') {
		StarsManager.putStar('accountId_star', 'ON', '01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR');
	}

	function  updateStar(newAccountId, newAccountIdToShow, starId) {
		if (starId == null)
			starId = 'star';

		var newStatus; {
			if (newAccountId == null || newAccountId == '')
				newStatus = StarStatus.INACTIVE;
			else if (newAccountId == preferredAccountId)
				newStatus = StarStatus.ON;
			else
				newStatus = StarStatus.OFF;
		}

		var star = StarsManager.getStar(starId);
		star.setStatus(newStatus);
		star.setAccountId(newAccountId);
		star.setAccountIdToShow(newAccountIdToShow);

		if (newStatus == StarStatus.INACTIVE)
			hideStar(starId);
		else
			changeStarAttr(newStatus, starId, newAccountId, newAccountIdToShow);
	}
	
	function openStarAlert1(starId, accountId, accountIdToShow) {
		$('#accountIdToShow_1').html(accountIdToShow);
		$('#starAlert1').modal("show");
		$('#btn_setPreferred').attr('href', ('javascript:setPreferredAccount(\'' + accountId + '\', \'' + accountIdToShow + '\', \'' + starId + '\');'));
	}
	
	function  hideStar(starId) {
		$('#' + starId + '_el').hide();
	}
	
	function changeStarAttr(newStatus, starId, accountId, accountIdToShow) {
		$('#' + starId + '_el')
			.attr('title', (newStatus == StarStatus.ON ?
						  'La stella indica il conto che hai impostato come preferito'
						: 'Se desideri, puoi indicare questo conto come preferito'
					))
			.attr('href', ( newStatus == StarStatus.ON ?
					  'javascript:openStarAlert2(\''+accountId+'\', \''+accountIdToShow+'\')'
					: 'javascript:openStarAlert1(\''+starId+'\', \''+accountId+'\', \''+accountIdToShow+'\')'
				))
		var classToRemove = newStatus == StarStatus.ON ? "icon icon-star" : "icon icon-star_fill";
		var classToAdd = newStatus == StarStatus.ON ? "icon icon-star_fill" : "icon icon-star";
		$('#' + starId + '_img').removeClass(classToRemove).addClass(classToAdd);
		$('#' + starId + '_el').show();
	}

	function  setPreferredAccount(accountId, accountIdToShow, starId) {
		var  url = '/webankpri/wbOnetoone/wbblack/commons/setPreferito.jsp';
		var  method = 'post';
		var  parms = {accountId: accountId, accountIdToShow: accountIdToShow, starId: starId};
		var  onSuccess = checkEsitoSetPreferred;
		jqAJAXCall('POST', 'json', url, function (esito) {checkEsitoSetPreferred(esito, parms);}, null, parms);
	}

	function checkEsitoSetPreferred(esito, parms) {
		if (esito.esito != 'ok') {
			$('#starAlert1').modal("hide");
			$('#starAlert1Ko').modal("show");
		}
		else {
			preferredAccountId = parms.accountId;
			if (typeof impostaPreferito == 'function'){ 
				impostaPreferito();
			}
			updateAllStars();

			$('#accountIdToShow_1ok').html(parms.accountIdToShow);
			$('#starAlert1').modal("hide");
			$('#starAlert1Ok').modal("show");
		}
	}
	function updateAllStars() {
		var stars = StarsManager.getStars();
		for(starId in stars) {
			var star = StarsManager.getStar(starId);
			updateStar(star.getAccountId(), star.getAccountIdToShow(), star.getId());
		}
	}
	
	function openStarAlert2(accountId, accountIdToShow) {
		$('#accountIdToShow_2').html(accountIdToShow);
		$('#starAlert2').modal("show");
	}

</script>
<div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				Vuoi impostare il conto <strong id="accountIdToShow_1">CC 01099 0000072608 EUR</strong> come preferito?
			</div>
			<div class="modal-footer">
				<div class="btn-align-left">
					<button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="btn_setPreferred" href="javascript:setPreferredAccount('01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR', 'accountId_star');">Conferma</a>
				</div>
			</div>
			<br class="clear">
		</div>
	</div>
</div>

<div class="modal fade in" id="starAlert1Ok" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-sm" role="document" >
		<div class="modal-content">
		   <div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
           </div>
			<div class="modal-body">
				Il conto <strong id="accountIdToShow_1ok">CC 01099 0000072608 EUR</strong> &Egrave; impostato come preferito. Da questo momento sar&agrave; preselezionato per tutte le operazioni.<br/>
				Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "<a href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_conto_pref_nickname&OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>".
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="starAlert1Ko" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		 	<div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
           	</div>
			<div class="modal-body">
				Per motivi tecnici, le modifiche richieste non sono state eseguite. Ti invitiamo a riprovare. Grazie<br>
				<a href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_conto_pref_nickname&OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="starAlert2" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		 	<div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
           	</div>
			<div class="modal-body">
				Il conto <strong id="accountIdToShow_2">CC 01099 0000072608 EUR</strong> &Egrave; gi&agrave; impostato come preferito. Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "<a href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_conto_pref_nickname&OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>".
			</div>
		</div>
	</div>
</div>

<!-- } === org.apache.jsp.banking.resp.accountsListSelect_jsp === -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<div class="formCenteredheader">
	<div id="pin32Div">
	    <div id="renderPin">
		    
			<input type='hidden' name='struts.token.name' value='s2-token'>
<input type='hidden' name='s2-token' value='I7WZAH8U5407V9SBRF679WI799LGDN0G'>
	<!-- overlay richiesta token push -->
<script type="text/javascript">

	var pushTimer;
	var erroreTokenValidator = "false";
	var tokenSbagliato = "${tokenSbagliato}";
	var appOnline = false;
	var responsive = "true";
	
  // Emulazione overlay richiesta autorizzazione push
  $(function(){
      $("#btnProsegui" ).click( function(event){
       	  event.preventDefault();
	      showLayer();
      });
  });

	$(function(){
		$('#autorizzazionePush').on('hidden.bs.modal', function() {
  			$('#codiceotp').val('');
  			closeOverlayer();
  		});
	});
	
	function closeOverlayer() {
		window.clearInterval(pushTimer);
		erroreTokenValidator = "false";
		tokenSbagliato = "false";
	}
  
  var count = 0;
  function showLayer() {
  	$('#bloccoAttesaPush').show(); 
      $('#bloccoGenerazioneManuale').hide();
      $('#conferma').hide();
      $('#codiceotp').val('');
      if(responsive == "true") {
     	 	$('#btnReturnPush').removeClass('btn btn-primary').addClass('btn btn-default'); 
			$('#btnGeneraTok').removeClass('btn btn-default').addClass('btn btn-primary');
      } else {
      		$('#btnReturnPush').removeClass('aButton').addClass('aButtonClear'); 
			$('#btnGeneraTok').removeClass('aButtonClear').addClass('aButton');
      }
	  if (erroreTokenValidator == "true" || tokenSbagliato == "true" || !appOnline) {
	  	switchStrongType();
	  } else {
	  	var url = cgi_script + '/pda/DispositionCreatePush.action',
		  parameters = {},
		  successFunc = function(esito) {
				if(esito.esito == 'ok') {
					pollingPush();
				} else {
					switchStrongType();
				}
		  },
		  failureFunc = function() {};
		  jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	  }
	      
   	  if (responsive == "true") {
   	  		$("#autorizzazionePush").modal("show");
   	  } else {
   	  		openPopOverLayer('autorizzazionePush');
   	  }
      $('#conferma').attr('onclick', 'transferOtp();' + $('#btnProsegui').attr('href').replace('javascript:', ''));
  }
  
  function pollingPush() {	
		var attempts = 30;
	    pushTimer = window.setInterval( function() {
	        var url = cgi_script + '/pda/DispositionCheckPush.action',
			parameters = {},
			successFunc = function(esito) {
				if(esito.isValidated == 'true') {
					 $('#codiceotp').val(''); 
					 $('#conferma').click();
				 	 if (responsive == "true") {
				 	  	$('#autorizzazionePush').modal('hide');
				 	 } else {
					 	closePopOverLayer('autorizzazionePush');
  						 window.clearInterval(pushTimer);
					 }
				 }		 	
			},
			failureFunc = function() {};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	      if(attempts == 0) {
		 	 switchStrongType();
	      }
	      attempts--;
	    }, 1000);
	};
	
	function transferOtp() {
		$('#hiddenOtp').val($('#codiceotp').val());
		if(responsive == "false") {
			closePopOverLayer('autorizzazionePush');
  			window.clearInterval(pushTimer);
		}
	}
	
	function switchStrongType() {
		$('#bloccoGenerazioneManuale').show();
			 $('#bloccoAttesaPush').hide();
			 $('#conferma').show();	
		 	 if (responsive == "true") {
		 	 	$('#btnGeneraTok').removeClass('btn btn-primary').addClass('btn btn-default'); 
				 $('#btnReturnPush').removeClass('btn btn-default').addClass('btn btn-primary');	 
		 	 } else {
		 	 	$('#btnGeneraTok').removeClass('aButton').addClass('aButtonClear'); 
				 $('#btnReturnPush').removeClass('aButtonClear').addClass('aButton');
		 	 }
	 		 if((erroreTokenValidator == "true" || tokenSbagliato == "true") && responsive == "false") {
	 		 	var errors = [];
	 		 	if(erroreTokenValidator == "true") {
	 		 		errors.push({ field: $('#codiceotp'), text: "Inserire il campo 'Codice otp'."});
	 		 	} 
	 		 	if(tokenSbagliato == "true") {
	 		 		errors.push({ field: $('#codiceotp'), text: "Non hai inserito il codice otp corretto."});
	 		 	} 
				setErrors(errors, "#otpGroup");
				ttSet($('#contenuti'));
	 		 } 
	}
	
$(document).ready(function () {
		if (erroreTokenValidator == "true" || tokenSbagliato == "true") {
			showLayer();
		}	
	})
</script>
	<div class="modal fade" id="autorizzazionePush" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h2 class="modal-title" id="myModalLabel">Autorizzazione</h2>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
	          <div class="row">
	            <div class="col-xs-12">
	                <div class="formGenerico borderFormRounded">
		
		<!-- Blocco con introduzione -->
		<div class="row">
			<div class="col-xs-12">
				<p>Per autorizzare l'operazione, conferma utilizzando la tua <strong>app di sicurezza</strong></p>
			</div>
		</div>
		<hr>
		<!-- Fine blocco introduzione -->
		<!-- Blocco "timeout" -->
		
		<!-- Fine blocco "timeout" -->
	    <!-- Form di richiesta -->
		<div class="formGeneric" id="bloccoAttesaPush">
			
				<!--RIGA DIVISA IN QUATTRO CAMPI -->
				<div class="row otpdesc app">
					<div class="col-xs-12 col-sm-6">
						<span class="introtext">Abbiamo inviato una notifica push <strong>sul tuo smartphone</strong> con l'app di sicurezza installata: fai <strong>tap sulla notifica</strong>.</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_finger.png"></div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<span class="introtext">Inserisci il tuo <strong>PIN</strong> o usa <strong data-toggle="tooltip" title="Se il tuo smartphone supporta la funzione, puoi impostare la <strong>conferma sull'app</strong> tramite 
										la tua <strong>impronta digitale</strong>, al posto dell'inserimento del Pin.
										Per <strong>scegliere</strong> se utilizzare l'impronta digitale o il Pin vai nella sezione &quot;imposta strumento di sicurezza&quot; 
										della tua app" class="txthelp">
										l'impronta digitale
						</strong> 
						per confermare.</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_insert.png"></div>
					</div>
				</div>
				<!-- Form di richiesta -->
				<div class="row">
					<div class="col-xs-12">
						<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span data-toggle="tooltip" class="txthelp" title="Per autorizzare l'operazione devi utilizzare lo smartphone su cui hai installato <strong>l'app di sicurezza</strong>.
			<br>
			<br>
			Accertati che la connessione dati del tuo smartphone sia attiva: in questo caso <strong>ricevi automaticamente una notifica push</strong>, 
			anche senza bisogno di aprire l'app sullo smartphone. Tappando sulla notifica, l'operazione viene autorizzata.
			<br>
			<br>
			Se non ricevi la notifica push perch&egrave; il tuo <strong>smartphone è offline</strong>
			<ul>
				<li>clicca sul <strong>bottone &quot;usa Genera codice token&quot;</strong> di questa pagina</li>
				<li>apri <strong>l'app  Webank
										</strong> sul tuo smartphone</li>
				<li>vai alla funzione <strong>&quot;Genera codice token&quot; dell'app</strong></li>
				<li>inserisci <strong>nella pagina successiva</strong> il codice generato dall'app.</li>
			</ul>
			Se hai bisogno di assistenza puoi chiamare il <strong>numero verde 800 060 070</strong>">Problemi con l'operazione?</span></a>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 center">
						<h3>Non hai ricevuto la notifica push?</h3>
						<div class="form-group btnWrapper">
							<div class="btn-align-center">
								<a href="javascript:;" id="btnGeneraTok" class="btn btn-primary" 
													onclick="$('#bloccoGenerazioneManuale').show();
															 $('#bloccoAttesaPush').hide();
															 $('#conferma').show();
															 $('#btnReturnPush').show();
															 ">
										<span>usa "Genera codice token"</span>
									</a>
								<br class="clear">
							</div>
						</div>
					</div>
				</div>
			
		 </div>
		<!-- Form di richiesta -->
	
		<!-- Form di richiesta -->
		<div class="formGeneric" id="bloccoGenerazioneManuale" style="display:none">
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
				<div class="row otpdesc app">
					<div class="col-xs-12 col-sm-4">
													<span class="introtext">Apri l'app e, vai su &lt;<strong>icona della rotellina</strong>&gt; e quindi su "Genera codice token".</span>
												<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_genera.png"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">
							Inserisci il tuo <strong>PIN</strong> sull'app oppure usa 
							<strong data-toggle="tooltip" 
								title="Se il tuo smartphone supporta la funzione, puoi impostare la <strong>conferma sull'app</strong> tramite 
										la tua <strong>impronta digitale</strong>, al posto dell'inserimento del Pin.
										Per <strong>scegliere</strong> se utilizzare l'impronta digitale o il Pin vai nella sezione &quot;imposta strumento di sicurezza&quot; 
										della tua app" class="txthelp">
									l'impronta digitale
							</strong> 
							per confermare.
						</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_insert.png"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">Inserisci qui sotto il codice token che viene in questo modo generato dall'app.</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_codice.png"></div>
					</div>
				</div>
				<!-- Form di richiesta -->
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span data-toggle="tooltip" class="txthelp" title="Per autorizzare l'operazione devi utilizzare lo smartphone su cui hai installato <strong>l'app di sicurezza</strong>.
			<br>
			<br>
			Accertati che la connessione dati del tuo smartphone sia attiva: in questo caso <strong>ricevi automaticamente una notifica push</strong>, 
			anche senza bisogno di aprire l'app sullo smartphone. Tappando sulla notifica, l'operazione viene autorizzata.
			<br>
			<br>
			Se non ricevi la notifica push perch&egrave; il tuo <strong>smartphone è offline</strong>
			<ul>
				<li>clicca sul <strong>bottone &quot;usa Genera codice token&quot;</strong> di questa pagina</li>
				<li>apri <strong>l'app  Webank
										</strong> sul tuo smartphone</li>
				<li>vai alla funzione <strong>&quot;Genera codice token&quot; dell'app</strong></li>
				<li>inserisci <strong>nella pagina successiva</strong> il codice generato dall'app.</li>
			</ul>
			Se hai bisogno di assistenza puoi chiamare il <strong>numero verde 800 060 070</strong>">Problemi con l'operazione?</span></a>
					</div>
					<div class="col-sm-4 col-xs-12 otpGroup">
						<label class="control-label" for="codiceotp">Codice Otp</label>
						<input type="password" name="otp" id="codiceotp" class="form-control clear-x" min="0" max="99999999999">	
					</div>
				</div>					
						 </div>
		 <hr>
	</div>
	<!-- Fine controllo TOKEN -->            </div>
	            <!-- pulsante per annullare (singolo)-->
	            <div class="col-xs-12">
	              <div class="form-group btnWrapper">
	                <div class="btn-align-left">
						
						<a type="button" class="btn btn-default" id="btnReturnPush" 
	                  		onclick="$('#bloccoAttesaPush').show(); 
									 $('#bloccoGenerazioneManuale').hide();
									 $('#conferma').hide();
									 $(this).hide(); 
									 $('#btnGeneraTok').removeClass('btn btn-default').addClass('btn btn-primary');">Torna a app online
						</a>
	                </div>
	                <div class="btn-align-right">
	                  <a type="button" class="btn btn-default" data-dismiss="modal">Annulla</a>
	                  <a type="button" class="btn btn-primary" id="conferma" style="display:none;" data-dismiss="modal">Conferma</a>
	                </div>
	                <br class="clear">
	              </div>
	            </div>
	            <!-- pulsante per annullare (singolo) -->
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- fine overlay richiesta token push -->

			<!-- FINE PIN 2 -->
		</div>
	    
		<div class="form-group">
			<div class="row">
				<div class="col-sm-12">
					<div class="btn-align-right">
						<a class="btn btn-primary" id="" href="javascript:sendPush();">
							<span>conferma</span>
						</a>
						<div style="display:none" id="">	
							<a class="btn btn-primary" id="btnProsegui" href="javascript:esegui();">
								<span>conferma</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
	<section class="boxesitoWrap" id="boxEsitoPositivo" style="display: none;">
	    <div class="boxesito positivo">
	        <i class="icon icon-alert_ok icon-2x"></i>
	        <div class="text">
	            <div class="row">
	                <div class="col-sm-12">
	                    <p>
	                        Il servizio Prelievo Cardless &egrave; stato disattivato.
	                    </p>
	                    <ul>
	                        <li>Per riattivare il servizio dovrai inoltrarci <strong>una nuova richiesta</strong>, sottoscrivendo un nuovo contratto.</li>
	                        <li>Puoi sempre controllare i <strong>prelievi effettuati</strong> accedendo alla lista movimenti del tuo conto.</li>
	                    </ul>
	                </div>
	           </div>
	       </div>
	    </div>
	</section>
	
	<section class="boxesitoWrap" id="boxEsitoNegativo" style="display: none;">
	    <div class="boxesito negativo">
	        <i class="icon icon-alert_error icon-2x"></i>
	        <div class="text">
	            <div class="row">
	                <div class="col-sm-12">
	                    <p>
	                        Funzionalit&agrave; al momento non disponibile.
	                    </p>
	                </div>
	           </div>
	       </div>
	    </div>
	</section>
</div>

</form>
















<!-- === org.apache.jsp.banking.resp.addActionMessages_jsp === { -->
	<script type="text/javascript">	
	$(function() {
        var errors = [];
        resetErrors('#');

            setHasErrors(errors, "#");
            return (!errors.length);
    });
	</script>
	
<!-- } === org.apache.jsp.banking.resp.addActionMessages_jsp === -->
	<!-- DIV tolto per schede prodotto con TAB -->
	<!-- </div>-->

</div><!--fine div contenuti -->
						
					</div>
					<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
				</div>
			</div>
		</div>
		<!-- /CONTENT -->

		



<!-- FOOTER -->
<footer class="footerFixed">
	<div class="footermenu">
		<div class="wrapper">

			<ul>


				<li><a href="/webankpri/wbOnetoone/2l/do/wbOnetoone/schedaProdotto.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_normativa&OBSKEY=nav_priv_wbx_webank_trasparenza" title="Qui informazioni sulla trasparenza"><img src="/img/ret/img_trasparenza_menu_footer.png" alt="Qui informazioni sulla trasparenza"/></a></li>
							
					
			
				<li><a href="/webankpri/wbOnetoone/2l/jsp/wbOnetoone/wbblack/contents/eventi/fpEventi.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_eventi&OBSKEY=nav_priv_wbx_eventi" title="Eventi e corsi">Eventi e corsi</a></li>			

				<li><a href="/webankpri/wbOnetoone/2l/action/wbOnetoone/schedaProdotto.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_normativa&OBSKEY=nav_priv_wbx_fogli_inf" title="Fogli Informativi">Fogli informativi</a></li>

				<li><a href="/webankpri/wbOnetoone/2l/action/wbOnetoone/schedaProdotto.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_normativa&OBSKEY=nav_priv_wbx_privacy_policy" title="Privacy">Privacy</a></li>

				<li><a href="/webankpri/wbOnetoone/2l/action/wbOnetoone/reclami.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_normativa&OBSKEY=nav_priv_wbx_reclami" title="Reclami">Reclami</a></li>

				<li>
					<strong>
						<a href="/webankpri/wbOnetoone/2l/action/banking/WsBonificoSolidaleSepaInput.action?fromNav=yes&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonifico_solidale" title="Solidarietà">Solidarietà</a>
					</strong>
				</li>

			</ul>
		</div>
	</div>	
	<div class="wrapper">
		<p>Banca Popolare di Milano S.p.A. - Piazza F. Meda, 4 - 20121 Milano - P.IVA 01906000201 <br />Gruppo Banco BPM. Societ&agrave soggetta a direzione e coordinamento di Banco BPM S.p.A. Tutti i diritti riservati.</p>
	</div>
</footer>
<!-- /FOOTER -->

	</div>
</body>


	<script type="text/javascript">
		var srvTs = '1510321740619'; 
	</script>

	<script type="text/javascript">
		vivocha2Key = 'vvc_placeholder_50e3fe4871f684ee06000110';
	</script>
	<script type="text/javascript" src="/wscmn/js/vivocha2.js"></script>

</html>