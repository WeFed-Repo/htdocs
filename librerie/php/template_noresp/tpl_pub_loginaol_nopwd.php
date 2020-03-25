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
		</div>
<!-- FINE MENU -->


		<div id="content" class="expanded">
			<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />	
			<div class="loginnopwd">	
				<h2><span>Segui lo stato della pratica di apertura conto</span></h2>
				<p>Entra in quest'area riservata per vedere a che punto &egrave; la richiesta di apertura del tuo nuovo Conto Webank.</p>
				<div id="loginaol">
					<div class="dati">
						<p>Inserisci il codice fiscale e la password che hai ricevuto via email.</p>
						<form method="post" action="" name="aol">
							<div class="box"><label><span>Codice fiscale</span></label><br /><input type="text" class="dati2" value="" maxlength="16" name=""/></div>
							<div class="box"><label><span>Password</span></label><br /><input type="text" class="dati2" value="" maxlength="16" name=""/></div>
						</form>
						<div class="fooform">
							<div class="fooformright">
								<div>
									<a href="javascript:document.aol.submit();" class="btnformright" title="entra"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>entra</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a>
								</div>
								<br class="clear"/>
							</div>
						</div>
						<div class="pass"><a href="#1">Recupera la password</a></div>	
						<br class="clear"/>					
					</div>
				</div>
				<h2 class="tit2"><span>Cosa?, Come?, Quando?</span></h2>
				<p>Guarda i passi per aprire il tuo nuovo conto corrente e leggi le risposte alle domande pi� frequenti per scoprire i modi e i tempi di apertura.</p>
			</div>
			
			<div class="accordioncont">
				<div class="box73">
					<div class="item">
						<div onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}" onmouseout="this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onmouseover="this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" class="tit" style="background-image: url(/img/ret/str_aol_titaccordion.gif);"><h2>Pratica del <br />xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_opened.gif"/><br class="clear"/></div><div class="cont" style="display:block">
							<img src="/img/ret/img_or_stepaol.gif" alt="" class="imgspiega">
						</div>
					</div>
				</div>

		
		<div class="box73">
			<div class="item">
				<div onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}" onmouseout="this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onmouseover="this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" class="tit" style="background-image: url(/img/ret/str_aol_titaccordion.gif);"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear"/></div><div class="cont">
					<p><b class="titgrande">LOREM:</b><br/>
						Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br/>
						Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br/>
						<b>IPSUM:</b><br/>
						Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
						Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>
						
						<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
						Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>
						
					<ul>
						<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
						<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
						<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
					</ul>
					<br/>
				</div>
			</div>
</div>


<div class="box73">
	<div class="item">
		<div onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}" onmouseout="this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onmouseover="this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" class="tit" style="background-image: url(/img/ret/str_aol_titaccordion.gif);"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear"/></div><div class="cont">
<p><b class="titgrande">LOREM:</b><br/>
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br/>
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br/>
<b>IPSUM:</b><br/>
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
</ul>
<br/>
</div>
</div>


</div>

<div class="box73">

<div class="item">
<div style="background-image: url(/img/ret/str_aol_titaccordion.gif);" class="tit" onmouseover="this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout="this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear"/></div><div class="cont">

<p><b class="titgrande">LOREM:</b><br/>
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br/>
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br/>
<b>IPSUM:</b><br/>
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
</ul>
<br/>
</div>
</div>


</div>
<div class="box73">

<div class="item">
<div style="background-image: url(/img/ret/str_aol_titaccordion.gif);" class="tit" onmouseover="this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout="this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear"/></div><div class="cont">
<p><b class="titgrande">LOREM:</b><br/>
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br/>
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br/>
<b>IPSUM:</b><br/>
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
</ul>
<br/>

</div>
</div>


</div>

<div class="box73">

<div class="item">
<div style="background-image: url(/img/ret/str_aol_titaccordion.gif);" class="tit" onmouseover="this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout="this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear"/></div><div class="cont">
<p><b class="titgrande">LOREM:</b><br/>
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br/>
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br/>
<b>IPSUM:</b><br/>
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br/>
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
</ul>
<br/>

</div>
</div>


</div>



</div><!--CHIUDE CONTENITORE ACCORDION NO PWD -->
		
</div>
<!-- FOOTER -->
<div id="footer">
	<ul>		
		<li>&nbsp;</li>
	</ul>

	<p>� 2009 Webank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
</div>
<!-- FINE FOOTER -->


		</div>
</div>
</body> 

</html>

