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
<!-- aol.step4 -->
















<!-- LINK CSS -->
<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

<!-- INIZIO JAVASCRIPT -->
<script src="/js/ret/aol.js" type="text/javascript"></script>
<script src="/js/ret/wz_tooltip.js" type="text/javascript"></script>
<script src="/wscmn/js/ret/TXTriepilogo.js" type="text/javascript" ></script>
<script src="/wscmn/js/ret/TXTcommonAol.js" type="text/javascript"></script>

<script src="/wscmn/js/ret/TXTmanagePageExpiration.js" type="text/javascript"></script>

<script type="text/javascript">
<!--
	noBack();
//-->
</script> 

<script type="text/javascript">
<!--
	function goMyBozza(){
		goBozze(document.aol, '/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&funz=bozze&fromAol=yes&CNT_TARGET=Privati', 4);
	}
//-->
</script>
<!-- FINE JAVASCRIPT -->

<form name="aol" action="/webankpub/wb/2l/do/aol/wbwsPUaol4.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" method="post">
<input type="hidden" name="OBS_KEY" value="pro_wbn_apri_contome0" /> 
<input type="hidden" name="BV_UseBVCookie" value="Yes" /> 
<input type="hidden" name="oksub4" value="nullo" />
<input type="hidden" name="fromPageName" value="wsAolRiepilogoDati.jsp" />

<!-- INTESTAZIONE -->

<h2>Richiesta di apertura del Conto Webank, il conto tutto online di Webank</h2>
<p>Ti serve una mano per compilare la richiesta? Chiamaci al numero verde <span class="evidente">800 148 149</span>.</p>





<div class="step "><span>1</span> Dati intestatari</div>
<div class="step"><span>2</span> Servizi</div>

<div class="step"><span>3</span> Modalità riconoscimento</div>
<div class="onStep step"><span>4</span> Riepilogo</div>
<div class="step lastStep"><span>5</span> Informative</div>

<div class="clear"></div>

<br>
<!-- FINE INTESTAZIONE -->

<h2 class="title">Riepilogo</h2>

<!-- INIZIO SEZIONE 1 --> 
<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td class="uno">Numero di intestatari:</td>
			<td class="due" colspan="3">
				<strong>1</strong>

			</td>
		</tr>
		<tr>
			<td class="uno">Numero cellulare:</td>
			<td class="due">
				<strong>349&nbsp;5555555</strong>
				&nbsp;&nbsp;&nbsp;&nbsp;Operatore:&nbsp;<strong>Tim</strong>

			</td>
			<td class="uno">Indirizzo email:</td>
			<td class="tre"><strong>simona.monte@tiscali.it</strong></td>
		</tr>
		<tr>
			<td class="uno">Utilizzo del conto:</td>
			<td class="due" colspan="3">

				<strong>Conto privato per esigenze familiari</strong>
			</td>
		</tr>
		<tr>
			<td class="uno">Titolare effettivo:</td>
			<td class="due" colspan="3">
				<strong>SI</strong>

			</td>
		</tr>
	</tbody>
</table>
<br />
<div class="iconButtons" align="right">
	<a title="MODIFICA" href="/webankpub/wb/2l/do/aol/wbwsPUaol0.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati&fromPageName=wsAolRiepilogoDati.jsp&fromRiep=yes"><span>Modifica dati</span><img src="/img/ret/ico2or_modifDati.gif"></a><br><br>
</div>
<!-- FINE SEZIONE 1 --> 

<!-- INIZIO SEZIONE 2 --> 
<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Dati dell'intestatario principale</h2><img src="/img/ret//ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont" style="display:none;">
<div>
	<h3>DATI ANAGRAFICI</h3>
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>
				<td class="uno">Nome*:</td>
				<td class="due"><strong>simona</strong></td>

				<td class="uno">Cognome*:</td>
				<td class="tre"><strong>monte</strong></td>
			</tr>
			<tr>
				<td class="uno">Sesso*:</td>
				<td class="due"><strong>F</strong></td>
				<td class="uno">Codice Fiscale*:</td>

				<td class="tre"><strong>MNTSMN72H58F205V</strong></td>
			</tr>		
			<tr>
				<td class="uno">Data di Nascita*:</td>
				<td class="due"><strong>18/06/1972</strong></td>
				<td class="uno">Nato all'estero:</td>
				<td class="tre"><strong>NO</strong></td>

			</tr>
			
			
				<tr>
					<td class="uno">Provincia:</td>
					<td class="due"><strong>MI</strong></td>
					<td class="uno">Comune:</td>
					<td class="tre"><strong>MILANO</strong></td>
				</tr>		
					
		</tbody>

	</table>
	<br />
	<p class="nota2">* : i campi contrassegnati da un asterisco non sono modificabili</p>
	<br class="clear"/>
	<div class="sep"></div>
	<h3>INDIRIZZO DI RESIDENZA</h3>
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>

			<tr>
				<td class="uno">Via/piazza:</td>
				<td class="due"><strong>via marghera</strong></td>
				<td class="uno">Numero civico:</td>
				<td class="tre">
					<strong>10</strong>&nbsp;&nbsp;&nbsp;CAP:&nbsp;<strong>20149</strong>

				</td>
			</tr>
			<tr>
				<td class="uno">Provincia:</td>
				<td class="due"><strong>MI</strong></td>
				<td class="uno">Comune:</td>
				<td class="tre"><strong>MILANO</strong></td>

			</tr>			
		</tbody>
	</table>
	<br class="clear"/>
	
	
	
	
	
	<div class="sep"></div>
	<h3>DOCUMENTO DI IDENTIFICAZIONE</h3>
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>

				<td class="uno">Tipo:</td>
				<td class="due" colspan="3"><strong>Carta d'identità</strong></td>
			</tr>
			<tr>
				<td class="uno">Numero:</td>
				<td class="due" colspan="3"><strong>aj8322920</strong></td>
			</tr>	
			<tr>

				<td class="uno">Rilasciata da:</td>
				<td class="due"><strong>milano</strong></td>
				<td class="uno">Provincia:</td>
				<td class="tre"><strong>MI</strong></td>
			</tr>	
			<tr>
				<td class="uno">Data di rilascio:</td>

				<td class="due" colspan="3"><strong>04/02/2009</strong></td>
			</tr>						
		
			<tr>
				<td class="uno">Professione:</td>
				<td class="due"><strong>Impiegato</strong></td>
				<td class="uno">Settore:</td>
				<td class="tre"><strong>Agricoltura</strong></td>

			</tr>
			<tr>
				<td class="uno">Titolo di Studio:</td>
				<td class="due" colspan="3"><strong>Diploma</strong></td>
			</tr>	
			<tr>
				<td class="uno">Come hai conosciuto Webank:</td>
				<td class="due" colspan="3"><strong>Amici</strong></td>

			</tr>						
		</tbody>
	</table>	
	<br class="clear"/>
	<div class="sep"></div>
	<h3>SEI GIA' CLIENTE WEBANK</h3>
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>

				<td class="due" colspan="4"><strong>NO</strong></td>
			</tr>
			
				
									
		</tbody>
	</table>	
	<br clear="all"/>
		<div class="iconButtons" align="right">
			<a title="MODIFICA" href="/webankpub/wb/2l/do/aol/wbwsPUaol1.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati&fromPageName=wsAolRiepilogoDati.jsp&fromRiep=yes"><span>Modifica dati</span><img src="/img/ret//ico2or_modifDati.gif"></a><br><br>
		</div>

</div>
</div>
</div>
</div>

<!-- FINE SEZIONE 2 --> 





<!-- INIZIO SEZIONE 5 --> 

<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Servizi scelti</h2><img src="/img/ret//ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont" style="display:none;">
<div>
<h3>ACCREDITO DEGLI INTERESSI E INVIO DELL'ESTRATTO CONTO</h3>
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">

		<tbody>
			<tr>
				<td class="due" colspan="4"><strong>Trimestrale</strong></td>
			</tr>			
		</tbody>
	</table>	
	<br clear="all"/>
	<div class="sep"></div>
	<h3>SERVIZIO "ESTRATTO CONTO E CONTABILI ONLINE"</h3>

	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>
				<td class="due" colspan="4"><strong>
				SI
	
				</strong></td>
			</tr>			
		</tbody>
	</table>
	<br clear="all"/>

	<div class="sep"></div>
	<h3>DEPOSITO TITOLI E SERVIZI DI INVESTIMENTO</h3>
	
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>
				<td class="due" colspan="4"><strong>
				NO

				</strong></td>
			</tr>

			
			
			
			
							
		</tbody>
	</table>

	<br clear="all"/>
	<div class="sep"></div>
	<h3>PROGRAMMA "PUNTA SU DI TE"</h3>
	<table class="dati_int" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>

				<td class="due" colspan="4"><strong>
				NO

				</strong></td>
			</tr>			
		</tbody>
	</table>	
		<div class="iconButtons" align="right">
			<a title="MODIFICA" href="/webankpub/wb/2l/do/aol/wbwsPUaol2.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati&fromPageName=wsAolRiepilogoDati.jsp&fromRiep=yes"><span>Modifica dati</span><img src="/img/ret//ico2or_modifDati.gif"></a><br><br>
		</div>

</div>
</div>
</div>
</div>


<!-- FINE SEZIONE 5 --> 
		
<!-- INIZIO SEZIONE 6 --> 


<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Modalit&agrave; riconoscimento</h2><img src="/img/ret//ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont" style="display:none;">
<div>
<h3>CHI DEVE FARE IL RICONOSCIMENTO</h3>

		<table class="dati_int" cellspacing="0" cellpadding="0" border="0">

					
						<tr>
							<td class="due">Modalit&agrave; riconoscimento:</td>
							<td class="due"><strong>agenzia</strong></td>
						</tr>
						
						<tr>

							<td class="due">Banca:</td>
							<td class="due"><strong>BPM</strong></td>
						</tr>
						
						
						<tr>
							<td class="due" valign="top">Chi deve fare il riconoscimento:</td>
							<td width="400">
								<table>

									<tbody>
										
										<tr>
											<td class="due"><strong>simona monte</strong></td>
											
										</tr>
										
										
										
				
												
									</tbody>
								</table>
							</td>
						</tr>

	</table>	
	<br clear="all"/>

	<div class="iconButtons" align="right">
		<a title="MODIFICA" href="/webankpub/wb/2l/do/aol/wbwsPUaol3.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati&fromPageName=wsAolRiepilogoDati.jsp&fromRiep=yes"><span>Modifica dati</span><img src="/img/ret//ico2or_modifDati.gif"></a><br><br>
	</div>

</div>
</div>
</div>
</div>

<br class="clear" />
<br class="clear" />
<!-- FINE SEZIONE 6 --> 
<br>
<!-- promozione -->
	<div class="greyboxed extended2">
		<div class="heading"><img src="/img/ret/greyboxed_top_right.gif"></div>
		<div class="body2 large">
			<div class="promozione">
				<img src="/img/ret/img_or_promo_nba.jpg" alt="">
			</div>
			<div class="testo">
				<h3>Informativa precontrattuale</h3>
				Fare il riconoscimento &egrave; semplice e non ha costi aggiuntivi. Basta <strong>firmare il modulo dal notaio</strong>
				il giorno della stipula del mutuo.<br/>
				Trovi le altre istruzioni per aprire il conto corrente:
				<ul>
					<li><a href="http://www.webank.it/doc/RegolconcorsoNBA.pdf#page=2" target="_blank">Lorem ipsum lorem ipsum (Pdf xxx Kb)</a></li>
				</ul>
			
				<div class="tab1d">
					<input type="radio" name="info_precontrattuale" value="1" onclick="document.aol.mod_precontratti.disabled=false;" class="bgReset" />
					<strong>Lorem ipsum lorem ipsum</strong>
					<div class="clear"></div>
				</div>
				<div class="tab2b">
					<input type="radio" name="info_precontrattuale" value="2" onclick="document.aol.mod_precontratti.disabled=true;document.aol.mod_precontratti.checked=false;" class="bgReset" />
					<strong>Lorem ipsum lorem ipsum</strong>
					<div class="clear"></div>
				</div>
				<br class="clear" />
				<ul class="note">
					<li>sdasd sda da sdas dasd asd</li>
					<li>sdasd dfsd fsdf sdf sdf dsf</li>
				</ul>
			</div>
		</div>
		<div class="footer"><img src="/img/ret/greyboxed_bottom_right.gif"></div>
	</div>
		
	<!--fine promozione -->	


</form>

<div id="buttonsOnRight">
	
		<div class="btnOut"><a title="SALVA BOZZA" href="javascript:openAlert('salvaInBozza');">SALVA BOZZA</a></div>		
		
	<div class="btnOut"><!--<a title="AVANTI" href="javascript:prosegui();">AVANTI</a>-->
	<a href= "/connect.php?page=tpl_pub_aol6.php" title="Avanti">AVANTI</a>
	
	</div>	
</div>





<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">



<!-- INIZIO CODICE ALERT BOX 75-->
<div class="layeralert2" id="salvaInBozza" style="display:none;">
	<div class="head"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closeAlert('salvaInBozza');"></div>
	<div class="body">
	<div class="important">
		<ul class="alert">
			<li><strong>Puoi salvare i dati finora inseriti e recuperarli in un secondo momento per completare la tua richiesta.</strong></li>

			<li>Per l'applicazione di promozioni fa fede la data in cui avrai completato la richiesta online.</li>
		</ul>
	</div>
	<br class="clear">
	<div class="fooform">
		<a class="btnformright" href="javascript:goMyBozza();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Ok</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
	</div>
	<br class="clear">

	</div>
	<div class="foot"></div>
</div>
<!-- FINE CODICE ALERT BOX 75-->
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

