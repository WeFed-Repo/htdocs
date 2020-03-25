<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">	


<head>
	<title>Webank - La banca online dal 1999</title>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">  
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Language" content="it" />
	<meta name="author" content="We@service S.p.a" />
	<meta name="description" content="Webank - La banca online dal 1999" />

	<meta name="keywords" content="-" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	 
	<script language="javascript" type="text/javascript">
		var tabId = 'null';
		var obsKey = 'pro_wbn_apri_contome0';
		var WSarea = 0;
		var imgPath = '/img/ret/';
		var cgi_script = '/webankpub';
		var cgi_host = 'webankint.webank.local';
		var cgi_protocol = 'https://';

		var login_action_privati = 'f1YoTkcTYMoeykaroN7mqoA.do';
		var login_host_imprese = '/webankpri/wbOnetoone/login/privata.do?&cf=0.28291760641087893';
		var extBankName = 'Webank';
		var dataUltimaModifica = '13/05/2009';
		var descrPrdSlider = cgi_script + '/wb/ajax/descrizioneProdottoSliderAjax.jsp';
		var addPrdWish = cgi_script + '/wb/ajax/addProdottoWishAjax.jsp';
	
		var tasso = '1,00';
		var tassoMeExtraFido = '8,00';
		var tassoMeInf = '0,90';
		var tassoMeSup = '0,00';
		var tassoMeTraderExtraFido = '8,00';
		var tassoMeTraderInf = '1,25';
		var tassoMeTraderSup = '0,00';
		var tassoMyBusinessExtraFido = '8,00';
		var tassoMyBusinessInf = '0,90';
		var tassoMyBusinessSup = '0,00';
		var shortBankName = 'Webank';

		var deltaFidoMe = '4,50';
		var dataModificaFido = '13/05/2009';
		var tassoFido = '5,50';
		var costoUtilizzoFidoMe = '5,50';
		var tassoIscMe = '5,63';
		var deltaIsc = '1,02';
		var importoUtilizzo = '1.200,00';

		var tasso_conv = tasso.replace(/\,/g, ".");
		var tan = 4.5 + parseFloat(tasso_conv);
		var utilizzo = (10 * tan) / 12;		
		var isc = tan * 1.0243;

		function getTasso()
		{
			document.write(tasso);
		}
		
		function getTassoMeExtraFido()
		{
			document.write(tassoMeExtraFido);
		}
		
		function getTassoMeInf()
		{
			document.write(tassoMeInf);
		}
		
		function getTassoMeSup()
		{
			document.write(tassoMeSup);
		}
		
		function getTassoMeTraderExtraFido()
		{
			document.write(tassoMeTraderExtraFido);
		}
		
		function getTassoMeTraderInf()
		{
			document.write(tassoMeTraderInf);
		}
		
		function getTassoMeTraderSup()
		{
			document.write(tassoMeTraderSup);
		}
		
		function getTassoMyBusinessExtraFido()
		{
			document.write(tassoMyBusinessExtraFido);
		}
		
		function getTassoMyBusinessInf()
		{
			document.write(tassoMyBusinessInf);
		}
		
		function getTassoMyBusinessSup()
		{
			document.write(tassoMyBusinessSup);
		}
		
		function getExtendedBankName()
		{
			document.write(extBankName);
		}

		function getDataUltimaModifica()
		{
			document.write(dataUltimaModifica);
		}

		var tan2 = Math.round(tan * 100) / 100;	
		var tan3 = tan2 + ""; 
		tan3 = tan3.replace(/\./g, ",");
		
		function getTassoTan()
		{
			document.write(tan3);
		}

		var isc2 = Math.round(isc * 100) / 100;
		var isc3= isc2 + "";
		isc3 = isc3.replace(/\./g, ",");
		
		function getTassoIsc()
		{
			document.write(isc3);			
		}

		var utilizzo2 = Math.round(utilizzo * 100) / 100
		var utilizzo3= utilizzo2 + "";
		utilizzo3 = utilizzo3.replace(/\./g, ",");
		
		function getUtilizzo()
		{
			document.write(utilizzo3);
		}

		function getWeb()
		{
			document.write(cgi_host);
		}

		function getDeltaFidoMe()
		{
			document.write(deltaFidoMe);
		}	

		function getDataModificaFido()
		{
			document.write(dataModificaFido);
		}	

		function getTassoFido()
		{
			document.write(tassoFido);
		}	

		function getCostoUtilizzoFidoMe()
		{
			document.write(costoUtilizzoFidoMe);
		}	

		function getTassoIscMe()
		{
			document.write(tassoIscMe);
		}	

		function getDeltaIsc()
		{
			document.write(deltaIsc);
		}	

		function getImportoUtilizzo()
		{
			document.write(importoUtilizzo);
		}
	</script>
	
	<link href="/css/pub_generic.css" rel="stylesheet" type="text/css" />
	<link href="/css/pub_generic_sifr.css" rel="stylesheet" type="text/css" />
	<link href="/css/pub_print_wb.css" rel="stylesheet" type="text/css" media="print" />

	

<script type="text/javascript" src="/js/sifr.js"></script>

<script type="text/javascript" src="/js/sifr-addons.js"></script>
<script type="text/javascript" src="/js/pub_generic.js"></script>

</head>
<!-- wasint2Node03/webank -->




<body>
	<div id="pagecontainer">
		<div id="mainleft"></div>
		<div id="main">

			




<!-- HEADER -->
<img src="/img/lg_stampa.jpg" class="headingprint" alt="Webank">
<div id="header">
	<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>	
	
	<script>
		var login_host_privati = 'https://' + cgi_host + '/webankpub/wb/' + login_action_privati;
		document.toplogin.action = login_host_privati;
		function setService()	{
			if (document.toplogin.service.value=="INLINEANET")	{
				document.toplogin.action=login_host_imprese;
				document.toplogin.IDAlleato.value="POE_HOME_PRIV";
				document.toplogin.Servizio.value="CONTO@BUSINESS";
			} else {
				document.toplogin.action=login_host_privati;
				document.toplogin.IDAlleato.value="HOME_PRIV";
				document.toplogin.Servizio.value="";
			}
		}
	</script>
</div>
<!-- FINE HEADER -->

<!-- MENU -->
<div id="menu">
	<ul>
		<li class="producthomebutton" id="menu_product"></li>
	</ul>
</div>	<!-- FINE MENU -->



<div id="content" class="expanded">
<!-- NON MODIFICARE -->
<!-- aol.step7-->

<!-- LINK CSS -->
<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

<!-- INIZIO JAVASCRIPT -->
<script type="text/javascript" src="/wscmn/js/ret/TXTcommon.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTlogin.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/stampa.js"></script>

<script type="text/javascript" src="/wscmn/js/ret/TXTmanagePageExpiration.js"></script>

<script src="/wscmn/js/ret/TXTcommonAol.js" type="text/javascript"></script>

<script type="text/javascript">
	<!--
		function openPop(link){
			window.open(link,'main','width=768,height=380,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
		}		
	//-->
</script>


<script src="/wscmn/js/ret/wz_tooltip.js" type="text/javascript"></script>

<script type="text/javascript">
<!--
	noBack();
//-->
</script> 
<!-- FINE JAVASCRIPT -->
<form id="aol" name="aol" action="/webankpub/wb/2l/do/aol/wbwsaggInvio.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" method="post">

	<input type="hidden" name="problemi_stampa" value="1" />
	<input type="hidden" name="OBS_KEY" value='pro_wbn_apri_conto_webank' />
	  		
	<h2>La procedura &egrave; terminata!</h2>
	<div class="clear"></div>
	
	<div class="boxSx">
		<p>

			Sotto, trovi  la documentazione contrattuale per l'apertura del conto corrente e del deposito titoli e 
			servizi di investimento. Ti chiediamo di stamparli e consegnarli presso un'agenzia Banca Popolare di 
			Milano, Banca di Legnano, Cassa di Risparmio di Alessandria o Banca di Mantova.<br /><br />
			<strong>Puoi anche inviarli</strong> al seguente indirizzo:<br /><br />
			WeBank - Spa<br />
			Via Massaua 4<br />
			20146 Milano
		</p>

		<table class="tabDoc" width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
        		<th width="100%">Stampa la documentazione contrattuale  per l'apertura del c/c</th>
      		</tr>
   			<tr>
   				<td colspan="3" class="sep">&nbsp;</td>
   			</tr>
   			<tr>

        		<td>
	 				<div class="linkDoc"><a href="/webankpub/aol/wbwsContratto.do?BV_UseBVCookie=Yes" id="generaContratto" name="ancora1" title="Modulo di richiesta - 6 pag (PDF 206 Kb)" target="_blank" class="linkx">Richiesta di apertura conto corrente compilata</a></div>
					<div class="icoPdf">(Pdf 206 kb)</div>
					<div class="clear"><br /></div>
				</td>
      		</tr>
			<tr>
				<td colspan="3" class="sep">&nbsp;</td>

			</tr>
			
			
			
			
    	</table>
				     
		<!-- SE E' STATA SCELTA LA CUSTODIA TITOLI -->
		
				     
		
		<table class="tabDoc" width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th width="100%">Stampa la guida per procedere</th>
			</tr>
			<tr>

				<td colspan="3" class="sep">&nbsp;</td>
			</tr>					   
			<tr>
				<td>
					<div class="linkDoc"><a href="/webankpub/aol/wbPDFVademecumVisualizer.do?BV_UseBVCookie=Yes&vademecum=vademecumGIACLIENTE.pdf&haveCt=false" name="ancora0" target="_blank" title="Guida 'Come aprire il conto Webank' " class="linkx">Guida 'Come aprire il conto Webank' </a></div>
					<div class="icoPdf">(Pdf 750 kb)</div>
					<div class="clear"><br /></div>
				</td>

			</tr>   					   				       
		</table>
		
	</div>
	
	<h3>COME SEGUIRE LA TUA RICHIESTA</h3>
	<p>
		Con Webank puoi seguire lo stato della tua richiesta di apertura Conto Webank. Abbiamo inviato al tuo 
		indirizzo di posta elettronica una <strong>email</strong> che contiene il link a un'area riservata. 
		In quest'area, dopo registrazione, puoi verificare a che punto è la tua richiesta.
	</p>

	<div class="clear"></div>
</form>
<form name="aol" action="/webankpub/aol/QuestionarioAol.do?BV_UseBVCookie=Yes" method= "post" class="formimgquest"> 
<div class="contimgquest">
	<img usemap="#contimgquest_map" src="/img/str_goto_questionario.gif"><map name="contimgquest_map"><area target="_self" href="" coords="605,225,740,238" title="" alt="" shape="rect"></map>
</div>
</form> 

<!-- FINE NUOVA WEBANK -->
</div>

<!-- FOOTER -->
<div id="footer">
	<ul>		
		<li><a href="/webankpub/wb/schedaProdotto.do?tabId=nav_pub_wb_chisiamo_nw&OBS_KEY=nav_pub_wb_chisiamo_nw" title="Chi siamo">Chi siamo</a></li>
		<li class="separator">&nbsp;</li>
		<li><a href="/webankpub/wb/schedaProdotto.do?tabId=nav_pub_wb_newsroom_nw&OBS_KEY=nav_pub_wb_newsroom_nw" title="Social media newsroom">Newsroom</a></li>
		<li class="separator">&nbsp;</li>
		<li><a href="/webankpub/wb/schedaProdotto.do?tabId=nav_pub_wb_trasparenza_nw&OBS_KEY=nav_pub_wb_trasparenza_nw" title="Trasparenza">Trasparenza</a></li>

		<li class="separator">&nbsp;</li>
		<li><a href="/webankpub/wb/fpPrivacy.do?tabId=nav_pub_wb_privacy_nw&OBS_KEY=nav_pub_wb_privacy_nw" title="Privacy">Privacy</a></li>

		<li class="separator">&nbsp;</li>
		<li><a href="/webankpub/wb/schedaProdotto.do?tabId=nav_pub_wb_sicurezza_req_nw&OBS_KEY=nav_pub_wb_sicurezza_req_nw" title="Sicurezza e Requisiti tecnici">Sicurezza e Requisiti tecnici</a></li>
		<li class="separator">&nbsp;</li>
		<li><a href="/webankpub/wb/schedaProdotto.do?tabId=nav_pub_wb_partecipa_nw&OBS_KEY=nav_pub_wb_partecipa_nw" title="Partecipa">Partecipa</a></li>
	</ul>

	<p>© 2009 Webank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
</div>
<!-- FINE FOOTER -->


		</div>
</div>
</body> 

</html>

