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
	<link href="/wscmn/css/cmn_datepicker.css" rel="stylesheet"/>
	

<script type="text/javascript" src="/js/sifr.js"></script>

<script type="text/javascript" src="/js/sifr-addons.js"></script>
<script type="text/javascript" src="/js/pub_generic.js"></script>
<!-- funzione per aprire overlayer -->

<script type="text/javascript">
	function openContattaci(indice) 
		{
			var vociFooter = document.getElementById('footer').getElementsByTagName('a');
			var btnContinua = document.getElementById('continua');
			var btnClose = document.getElementById('close');
			var linksArray = new Array;
			linksArray[0] = "#";
			linksArray[1] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_trasparenza_nw&amp;OBS_KEY=pro_wbn_trasparenza";
			linksArray[2] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_privacy_nw&amp;OBS_KEY=pro_wbn_privacy";
			linksArray[3] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_sicurezza_nw&amp;OBS_KEY=pro_wbn_sicurezza";
			linksArray[4] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_partnership_nw&amp;OBS_KEY=pro_wbn_partnership";
			linksArray[5] = "/webankpub/wb/schedaContattiStampa.do?tabId=nav_pub_wb_newsroom_nw&amp;OBS_KEY=pro_wbn_newsroom&amp;KEY4=pro4_contatti_stampa";
			linksArray[6] = "/webankpub/wb/fpSocial.do?tabId=nav_pub_wb_newsroom_nw&amp;OBS_KEY=pro_wbn_newsroom";
			linksArray[7] = "/webankpub/wb/PartecipaHome.do?tabId=nav_pub_wb_partecipa_nw&amp;OBS_KEY=pro_wbn_partecipa";
			linksArray[8] = "http://www.youtube.com/webanktv";
		
		openPopOverLayer ('contattaci','floated');
			
			for(i = 0; i<vociFooter.length+1; i++)
				{
					btnContinua.setAttribute('href',linksArray[indice]);
					if(indice>7) {btnContinua.setAttribute('target','blank'); btnClose.setAttribute('target','blank');}
					
					btnClose.setAttribute('href',linksArray[indice]);
				}
			
				if(document.getElementById('CalendarPickerControl'))
					{
						document.getElementById('CalendarPickerControl').style.zIndex = getNextHighestZindex();
					}
		}
	
	
	
	</script>
<!-- fine funzione per aprire overlayer -->
<script src="/wscmn/js/cmn_datepicker.js" type="text/javascript"></script>
</head>
<!-- wasint2Node03/webank -->




<body>
	<div id="pagecontainer">
		<div id="mainleft"></div>
		<div id="main">


<!-- HEADER -->
<img src="/img/lg_stampa.jpg" class="headingprint" alt="Webank">
<div id="header">
	<h1><a href="javascript:;" onclick="openContattaci(0);"><span>Webank</span></a></h1>	
	
	<script>
		var login_host_privati = 'https://' + cgi_host + '/webankpub/wb/' + login_action_privati;
		//document.toplogin.action = login_host_privati;
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
	<div id="c2mToolbar"><img src="/img/str_pulsante_chat_aol.jpg" alt =""  id=""  class="btnchataol"/></div>
</div>
<!-- FINE HEADER -->

<!-- MENU -->
<div id="menu">
	<ul>
		<li class="producthomebutton" id="menu_product"></li>
	</ul>
</div>	<!-- FINE MENU -->



<div id="content" class="expanded" style="height:auto">
<!-- NON MODIFICARE -->
<!-- aol.step0 -->

<!-- LINK NUOVI CSS AOL -->
<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />
<script type="text/javascript" src="/wscmn/js/ret/TXTcommon.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTlogin.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTiniziare.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTmanagePageExpiration.js"></script>
<script type="text/javascript" src="/js/ret/bloccodati.js" ></script>
<script type="text/javascript" src="/js/ret/wz_tooltip.js" ></script>


<script type="text/javascript">

	var act = new Date(2009,11,15,14,55,16,0);
	

</script>

<script language="javascript" type="text/javascript">
<!--
var _o=(typeof opcounter=="object")?opcounter:new Object;_o.D=document;_o.L=_o.D.location;_o.T=
new Date;_o.Q=new Object;_o.C=new Object;_o.U="https://by.essl.optimost.com/by/counter/523/-/7/event.js";
_o.D_ts=Math.round(_o.T.getTime()/1000);_o.D_tzo=_o.T.getTimezoneOffset();_o.D_loc=_o.L.protocol+
"//"+_o.L.hostname+_o.L.pathname;_o.D_ckl=_o.D.cookie.length;_o.D_ref=_o.D.referrer;function
_oI(){var s=_o.L.search;var c=_o.D.cookie;if(s.length>3){for(var a=s.substring(1).split("&")
,i=0,l=a.length;i<l;i++){var p=a[i].indexOf("=");if(p>0)_o.Q[a[i].substring(0,p)]=unescape(a[i].substring(
p+1));}}if(c.length>3){for(var a=c.split(";"),i=0,b=a.length;i<b;i++){var v=a[i].split("=");
while(v[0].substring(0,1)==" ")v[0]=v[0].substring(1,v[0].length);if(v.length==2)_o.C[v[0]]=
unescape(v[1]);}}}function _oS(){var o=new Object;for(var n in _o)o[n]=_o[n];o.D=o.L=o.T=o.Q=o.C=
o.U=null;var q='';for(var n in o)if(o[n]!=null && o[n]!="")q+=(q.length>0?"&":(_o.U.indexOf(
"?")>0?"&":"?"))+n+"="+escape(o[n]);return _o.U+q;}_oI();for(var n in _o.Q)if(n.substring(
0,2)=="op")_o[n]=_o.Q[n];for(var n in _o.C)if(n.substring(0,2)=="op")_o[n]=_o.C[n];_o.D.write(
'<'+'script type="text/javascript" src="'+_oS()+'"><\/script>');
//-->
</script>

<!-- Start of DoubleClick Spotlight Tag: Please do not remove-->
<!-- Activity Name for this tag is:Conferma Adesione -->
<!-- Web site URL where tag should be placed: http://www.webank.it/webankpub/wb/2l/do/aol/wbwsaggInvio.do?BV_UseBVCookie=Yes -->
<!-- This tag must be placed within the opening <body> tag, as close to the beginning of it as possible-->
<!-- Creation Date:02/12/08 -->
<SCRIPT language="JavaScript">
var axel = Math.random()+"";
var a = axel * 10000000000000;
document.write('<IFRAME SRC="https://fls.doubleclick.net/activityi;src=799974;type=conto465;cat=inizi951;ord='+ a + '?" WIDTH=1 HEIGHT=1 FRAMEBORDER=0></IFRAME>');
</SCRIPT>
<NOSCRIPT>
<IFRAME SRC="https://fls.doubleclick.net/activityi;src=799974;type=conto465;cat=cat=inizi951;ord=1?" WIDTH=1 HEIGHT=1 FRAMEBORDER=0></IFRAME>
</NOSCRIPT>
<!-- End of DoubleClick Spotlight Tag: Please do not remove-->


<script type="text/javascript">
<!--
	noBack();
//-->
</script> 

<form id="aol" name="aol" action="/webankpub/wb/2l/do/aol/wbwsPUaol1.do?cf=0.5504290260591416&CNT_TARGET=Privati" method="post">

<input type="hidden" name="oksub0" value="nullo" />
<input type="hidden" name="fromPageName" value="wsPUaol0.jsp" />
<input type="hidden" name="OBS_KEY" value='pro_wbn_apri_contome0' />
	
	





<h2>Richiesta di apertura del Conto Webank, il conto tutto online di Webank</h2>
<!-- Gestione promozioni e convenzioni -->
<div class="offerta2">
			<div class="offleft">

				<span>3% SUL VINCOLO A 12 MESI</span><br />
			</div>
			<div class="offright">
				<a href="#" onmouseover="Tip('A tutti coloro che aderiscono alla promozione, Webank <strong>rimborsa l’imposta di bollo relativa al deposito titoli</strong> per il secondo semestre 2011, per il 2012 e per il 2013.<br />L’importo del rimborso sarà calcolato secondo i criteri previsti dalla nuova legge Finanziaria (Legge 15 luglio 2011, n. 111).<br /><br />1.richiedi l’apertura di Conto Webank e del deposito titoli entro il 30 settembre 2011;<br />2.inviaci la documentazione firmata entro il 31 ottobre 2011;<br />3.attiva il Servizio di Prestito Titoli entro il 15 novembre 2011, mantenendolo attivo per ogni periodo di riferimento di calcolo dell’imposta;<br />4.verifica che sul deposito titoli sia presente, al 31 dicembre 2011, un controvalore di Titoli e Fondi pari ad almeno 10.000 euro (Giacenza complessiva); per il 2012 e per il 2013 tale controvalore minimo dovrà essere presente al termine di ogni Periodo di Riferimento trimestrale per il calcolo dell’imposta di bollo.<br /><br />Per tutti i dettagli dell’iniziativa, leggi il Regolamento sul sito www.webank.it', WIDTH, 400, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1">verifica le condizioni per aderire</a><img src="/img/ret/btn_offerta.gif" align="absmiddle" alt=""/>
			</div>
			<div class="clear"></div>
			<div class="offtext">
				Lorem ipsum dolor sit amet
			</div>

	</div>

	
<!-- Promozione sfondo nero -->	
<div class="blackPromo">
	<div class="imageBlock">
		<!-- IMMAGINE DA PARAMETRIZZARE (es: fumetto) -->
		<img src="/img/img_promoBlack_fumetto.gif" />
	</div>
	<div class="promoBlock">
		<span class="promoTitle">Fai la tua manovra! Sposta i titoli in webank!</span>
		<a href="javascript:;" class="promoTip" onmouseover="Tip('A tutti coloro che aderiscono alla promozione, Webank <strong>rimborsa l’imposta di bollo relativa al deposito titoli</strong> per il secondo semestre 2011, per il 2012 e per il 2013.<br />L’importo del rimborso sarà calcolato secondo i criteri previsti dalla nuova legge Finanziaria (Legge 15 luglio 2011, n. 111).<br /><br />1.richiedi l’apertura di Conto Webank e del deposito titoli entro il 30 settembre 2011;<br />2.inviaci la documentazione firmata entro il 31 ottobre 2011;<br />3.attiva il Servizio di Prestito Titoli entro il 15 novembre 2011, mantenendolo attivo per ogni periodo di riferimento di calcolo dell’imposta;<br />4.verifica che sul deposito titoli sia presente, al 31 dicembre 2011, un controvalore di Titoli e Fondi pari ad almeno 10.000 euro (Giacenza complessiva); per il 2012 e per il 2013 tale controvalore minimo dovrà essere presente al termine di ogni Periodo di Riferimento trimestrale per il calcolo dell’imposta di bollo.<br /><br />Per tutti i dettagli dell’iniziativa, leggi il Regolamento sul sito www.webank.it', WIDTH, 400, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1">verifica le condizioni per aderire</a>
		<p class="promoText">
			Webank ti rimborsa integralmente per il secondo semestre 2011, per il 2012 e 2013, l’imposta di bollo su deposito titoli.
		</p>
	</div>
</div>
<!-- Fine promozione sfondo nero -->

<p>Ti serve una mano per compilare la richiesta? Chiamaci al numero verde <span class="evidente">800 148 149</span>.</p>
	

	

	<div class="clear" id="arrowDati1"></div>
	
     <h3>QUANTI INTESTATARI AVR&Agrave; IL CONTO CORRENTE?</h3>
      <p class="sep">
      
	  <span class="radioStyle"><input type="radio" name="num_intestatari" value="1" checked="checked"> Uno</span>

	  <span class="radioStyle"><input type="radio" name="num_intestatari" value="2"> Due</span>
	  <span class="radioStyle"><input type="radio" name="num_intestatari" value="3"> Tre</span>
	  </p>
		
	  <br>
	  
	  <h3>DATI DELL'INTESTATARIO</h3>
	  <p>

	  Il <b>numero</b> di cellulare e <b>l'indirizzo e-mail</b> sono <b>fondamentali</b> per le comunicazioni di Webank. 
	  Il numero di cellulare, in particolare, è indispensabile per aderire al <b>Programma Sicurezza</b>. 
	  E' l'iniziativa che ti permette di ricevere <b>SMS GRATUITI</b> ogni qualvolta viene effettuata una 
	  &quot;

	  <a href="#" id="helpDisposizione"	onmouseover="Tip('- Bonifico Italia<br>- Ricariche cellulari<br>- Ricariche carte prepagate', WIDTH, 205, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1">
	  	disposizione on line
	  </a>&quot; sul tuo conto corrente.
	  </p>
	  <div class="tab1">Nome*</div>

	  <div class="tab2">
	  <input type="text" name="nome_int1" size="40" value="">
	  </div>

	  <div class="tab3">Cognome*</div>
	  <div class="tab4">
	  <input type="text" name="cognome_int1" size="40" value="">
	  </div>
	  <div class="clear"></div>

	  <div class="tab1">Sesso*</div>
	  <div class="tab2">

	  <input type="radio" name="sesso_int1" value="M"> M
	  <input type="radio" name="sesso_int1" value="F"> F
	  </div>
	  <div class="tab3">Codice fiscale*</div>
	  <div class="tab4">
		<input type="text" name="cod_fiscale_int1" maxlength="16" size="40" value="">
	  </div>
	  <div class="clear"></div>

	  <div class="tab1">Data di nascita* <div class="smallNote">(GG MM AAAA)</div></div>
	  <div class="tab2">
	  <input type="text" name="gg_nascita_int1" maxlength="2" size="2" value="" onkeyup="javascript:mySpostaFocus(this,document.aol.mm_nascita_int1,2);" class="inputStep2">
	  <input type="text" name="mm_nascita_int1" maxlength="2" size="2" value="" onkeyup="javascript:mySpostaFocus(this,document.aol.aa_nascita_int1,2);" onfocus="select();" class="inputStep2"> 
	  <input type="text" name="aa_nascita_int1" maxlength="4" size="2" value="" onfocus="select();" class="inputStep2">
	  <script type="text/javascript">
	  	document.aol.gg_nascita_int1.setAttribute('autocomplete','off');
	  </script>
	  </div>

	  
	  
 	  <div class="clear"></div>
	
	
	  <div class="tab1">Numero cellulare*</div>
	  <div class="tab2">
	  <input type="text" name="prefisso_3_int1" maxlength="3" size="4" value="">
	  <input type="text" name="telefono_3_int1" maxlength="7" size="7" value="">
	  <input type="hidden" name="sito_tel_3_int1" value="Cellulare">
	  
	   <select id="operatore_int1" name="operatore_int1" class="inputStep2 altri">
			<option value="">operatore</option>

			<option value="Tim">Tim</option>
			<option value="Vodafone">Vodafone</option>
			<option value="Wind">Wind</option>
			<option value="Tre">Tre</option>
			<option value="Altro">Altro</option>
		</select>

		
		
		
	  </div>
	  
	  <div class="tab3">Indirizzo e-mail*</div>
	  <div class="tab4">
	  	<input type="text" name="mail_int1" size="40" value="">
	  </div>	 
	  
	   				

	<div class="clear"></div>
	<div class="sep"></div>	
	
	<h3>ADEGUAMENTO ALLA NORMATIVA ANTIRICICLAGGIO</h3>	  
	  <p>

	  Ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07) il Cliente è obbligato a fornire alla 
	  Banca alcune dichiarazioni e informazioni. Ti ricordiamo che il rilascio di false informazioni od omissioni 
	  <strong>comporta conseguenze anche di natura penale</strong>. Prima di procedere ti invitiamo a prendere visione dell'<a target="_blank" href="/webankpub/wb/schedaProdotto.do?BV_UseBVCookie=Yes&tabId=nav_pub_wb_normativa&OBS_KEY=pro_wbn_privacy">Informativa 
	  sul trattamento dei dati personali</a>. I dati forniti di seguito devono ritenersi integrati (sempre per le finalit&agrave; 
	  di cui alla normativa antiriciclaggio) 
	  con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.
	  </p>
	  <div class="tab1">Natura e scopo dei rapporti*</div>

	  <div class="tab2">
	  <select name="usoConto" id="usoConto"><option value="">-Seleziona-</option>

			<option value="1">Conto privato per esigenze familiari</option>
			<option value="2">Conto privato per esigenze di finanziamento</option>
			<option value="3">Conto privato per esigenze di investimento</option></select>
	  </div>
	  <div class="clear"></div>
	  <table class="checkcontainer">
			<tbody><tr>

						<td>
							<input type="checkbox" name="titolare" value="SI" id="titolare">
						</td>
						<td>
							<p>
								<strong>Titolare effettivo:</strong> 
								Ai sensi del D.Lgs. 231/07 per Titolare Effettivo si intende la persona o le persone fisiche che, in ultima istanza, possiedono o controllano il cliente, nonch&egrave; la persona fisica per conto della quale è realizzata un'operazione o un'attivit&agrave;, individuate sulla base dei criteri di cui all'allegato tecnico al medesimo D.Lgs. 231/07.
							</p>

							<br>
							<p class="nota2">Se vuoi fornire una diversa dichiarazione (natura e scopo del rapporto e titolare effettivo) in relazione ai singoli rapporti o intestatari, chiama il numero 800 060 070.</p>
						</td>
					</tr>
					
			</tbody>
		</table>
	  <br>	
	  
	<h3>CONVENZIONI E PROMOZIONI</h3>	  
	<!--<p>

		Puoi inserire un solo codice convenzione e un solo codice della persona che ti ha presentato.
	</p>-->

	<div class="boxEsteso">
		<div class="boxEstesoFooter">
			<div class="boxEstesoHeader"><h4>Convenzioni</h4>
				<p>Inserisci qui il codice convenzione:
					<input type="text" name="cod_prom_conv" maxlength="10" size="37" value="">
				</p>	
				<p class="secondrow"> puoi inserirne solo uno</p>
				<div class="clear"></div>				
			</div>

		</div>
	</div>
	<div class="boxEsteso">
		<div class="boxEstesoFooter">
			<div class="boxEstesoHeader2"><h4>UN AMICO TI HA FATTO CONOSCERE WEBANK?</h4>
				<p>Inserisci qui il codice di chi ti ha presentato:
					<input type="text" name="cod_presentatore" maxlength="18" size="37" value="">
				</p>
				<div class="clear"></div>

			</div>
		</div>
	</div>
	
	<!-- nuovo box codice convenzioni-->
	<div class="boxEsteso">
		<div class="boxEstesoFooter">
			<div class="boxEstesoHeader"><h4>Hai un codice promotore?</h4>
				<p>Inserisci qui il codice:
				<input type="text" value="" size="37" maxlength="10" name="cod_prom_conv" isdatepicker="true">
				</p>	
				<div class="clear"></div>				
			</div>

		</div>
	</div>

	<div class="clear"></div>
	<div class="sep"></div>	
	
	<h3>INFORMATIVA SUL TRATTAMENTO DEI DATI PERSONALI</h3>
	<p>Ti ricordiamo che, se il conto &egrave; cointestato, consideriamo tutte le decisioni prese congiuntamente da tutti gli intestatari.<br />

	<textarea class="attcont">WeBank S.p.A., raccoglie, tratta e comunica a terzi i dati personali dei propri clienti che intrattengono rapporti pre-contrattuali e/o contrattuali con la stessa (di seguito definiti come Interessati).

Ai sensi dell'art. 13 del D.Lgs. 196/2003 (di seguito il "Codice Privacy"), WeBank S.p.A., in qualità di Titolare del trattamento dei dati, è tenuta a fornire all'interessato alcune informazioni riguardanti l'utilizzo dei dati personali e, in via di principio, salvo precise eccezioni, a procurarsi il consenso dell'Interessato.

1.Finalità del trattamento

WeBank S.p.A. raccoglie e tratta dati personali degli interessati per le seguenti finalità:

a) per l'esecuzione degli obblighi derivanti dai rapporti contrattuali instaurati con Webank S.p.A. o per lo svolgimento di attività pre-contrattuali
b) per adempiere o esigere l'adempimento di obblighi previsti dalla normativa comunitaria, dalle leggi e dai regolamenti (tra cui, a titolo esemplificativo e non esaustivo, la normativa antiriciclaggio vigente) o per adempiere o esigere l'adempimento di obblighi previsti dagli organi di vigilanza e controllo o stabiliti da prassi amministrative;
c) per l'esecuzione degli obblighi derivanti dai rapporti contrattuali instaurati fra  Webank S.p.A e el banche del gruppo per l'erogazione ddei servizi in circolarià infragruppo
d) per lo svolgimento di attività volte a prevenire la commissione di frodi.

Il conferimento dei dati personali per tali finalità è obbligatorio e il rifiuto a fornirli comporta l'impossibilità per WeBank di instaurare e dare esecuzione ai rapporti in oggetto. Il relativo trattamento non richiede il consenso dell'Interessato. 

e) per finalità funzionali all'attività svolta da WeBank quali:

- la rilevazione del grado di soddisfazione della clientela sulla qualità dei servizi resi;
- l'elaborazione di studi e ricerche di mercato;
- la promozione di prodotti e servizi di WeBank e delle società del Gruppo BPM;
- la promozione di prodotti e servizi di bancari e finanziari di terzi soggetti;

Il conferimento dei dati personali necessari a tali finalità non è obbligatorio. Qualora tali dati vengano forniti, il loro trattamento richiede il consenso.


I Suoi dati saranno trattati dai nostri dipendenti e collaboratori, interni ed esterni, a ciò formalmente Incaricati ai sensi dell'art. 30 del Codice Privacy nonché strutture che svolgono compiti tecnici, di supporto (in particolare servizi legali, informatici, spedizioni) e di controllo aziendale.

2. Comunicazione a terzi e diffusione

WeBank, oltre a comunicare e/o diffondere i dati personali degli Interessati in ottemperanza ad obblighi previsti dalla normativa comunitaria, da leggi e regolamenti, comunica i dati personali a

a) organi di vigilanza e controllo in forza di provvedimenti dagli stessi emanati ovvero stabiliti da prassi amministrative o da regolamenti.

La comunicazione dei dati personali ed il correlato trattamento da parte dei soggetti terzi cui sono stati comunicati i dati per le finalità in oggetto non necessitano del consenso dell'Interessato.

b) soggetti terzi, del cui supporto WeBank si avvale per le finalità di cui al punto 1 che precede e, cioè:

- banche del gruppo Banca Popolare di Milano nell'ambito di servizi di natura bancaria
- banche ed istituti finanziari, operanti anche all'estero
- call center e soggetti fornitori di servizi generali (es. archiviazione contratti, stampa imbustamento e spedizione/consegna comunicazioni/tessera bancomat/assegni ecc)
- soggetti fornitori di servizi tecnologici del cui supporto si avvale WeBank
- società di rilevazione dei rischi creditizi e di insolvenze
- professionisti, società esterne di recupero crediti e società per la revisione del proprio bilancio;

Nominativi ed indirizzi di tali soggetti sono disponibili su richiesta degli Interessati.

c) soggetti terzi quali:

- soggetti che provvedono alla rilevazione del grado di soddisfazione della clientela sulla qualità dei servizi resi;
- soggetti che provvedono all'elaborazione di studi e ricerche di mercato;
- soggetti che provvedono alla promozione di prodotti e servizi;


La comunicazione dei dati personali alle società di cui al presente punto necessita del consenso dell'Interessato.


3. Dati sensibili

L'art. 4, comma 1, lettera d), del Codice Privacy definisce sensibili quei dati "...idonei a rivelare l'origine razziale ed etnica, le convinzioni religiose, filosofiche o di altro genere, le opinioni politiche, l'adesione a partiti, sindacati, associazioni od organizzazioni a carattere religioso, filosofico, politico o sindacale, nonché i dati personali idonei a rivelare lo stato di salute e la vita sessuale" dell'Interessato. La raccolta, trattamento e la comunicazione dei dati sensibili potranno essere effettuati da WeBank nell'ambito dell'esecuzione delle attività di cui al Punto 1.

Il trattamento di dati sensibili di cui al presente punto necessita del consenso scritto dell'Interessato.



4. Trasferimento dei dati all'estero

Nell'esecuzione di operazioni bancarie dirette verso banche, istituti di credito o intermediari finanziari esteri appartenenti a Paesi esteri extra UE ovvero nell'ambito di ordini di operazioni finanziarie dirette verso banche, istituti di credito o intermediari finanziari esteri appartenenti a Paesi esteri extra UE, l'Interessato potrà liberamente richiedere che propri dati personali possano essere trasferiti all'estero, con o senza l'ausilio di mezzi elettronici o comunque automatizzati. Le operazioni bancarie e finanziarie direttamente attuate dagli Interessati ovvero richieste a WeBank costituiranno libero ed espresso consenso degli Interessati al trasferimento dei dati all'estero ai sensi dell'articolo 43 del Codice Privacy.

5. Modalità di trattamento

WeBank tratta i dati personali degli interessati in modo lecito e secondo correttezza ed in modo da assicurarne la riservatezza e la sicurezza. Il trattamento viene effettuato, mediante strumenti manuali, informatici e telematici, con modalità organizzative e con logiche strettamente correlate alle finalità indicate

6. Diritti dell'Interessato

In relazione al trattamento dei dati personali spettano all'interessato i diritti di cui all'articolo 7 del Codice Privacy.

1. L'interessato ha diritto di ottenere la conferma dell'esistenza o meno di dati personali che lo riguardano, anche se non ancora registrati, e la loro comunicazione in forma intelligibile. 
2. L'interessato ha diritto di ottenere l'indicazione: 
a) dell'origine dei dati personali; 
b) delle finalità e modalità del trattamento; 
c) della logica applicata in caso di trattamento effettuato con l'ausilio di strumenti elettronici; 
d) degli estremi identificativi del titolare, dei responsabili e del rappresentante designato ai sensi dell'articolo 5, comma 2; 
e) dei soggetti o delle categorie di soggetti ai quali i dati personali possono essere comunicati o che possono venirne a conoscenza in qualità di rappresentante designato nel territorio dello Stato, di responsabili o incaricati. 
3. L'interessato ha diritto di ottenere: 
a) l'aggiornamento, la rettificazione ovvero, quando vi ha interesse, l'integrazione dei dati; 
b) la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, compresi quelli di cui non è necessaria la conservazione in relazione agli scopi per i quali i dati sono stati raccolti o successivamente trattati; 
c) l'attestazione che le operazioni di cui alle lettere a) e b) sono state portate a conoscenza, anche per quanto riguarda il loro contenuto, di coloro ai quali i dati sono stati comunicati o diffusi, eccettuato il caso in cui tale adempimento si rivela impossibile o comporta un impiego di mezzi manifestamente sproporzionato rispetto al diritto tutelato. 
4. L'interessato ha diritto di opporsi, in tutto o in parte: 
a) per motivi legittimi al trattamento dei dati personali che lo riguardano, ancorché pertinenti allo scopo della raccolta; 
b) al trattamento di dati personali che lo riguardano a fini di invio di materiale pubblicitario o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale.

Per ottenere qualunque informazione in ordine al trattamento dei propri dati personali gli Interessati possono rivolgersi ai soggetti indicati al punto successivo.

7. Titolare e Responsabile

Il Titolare del trattamento dei dati personali é WeBank S.p.A., in persona del legale rappresentante pro-tempore domiciliato per la carica presso la sede sociale della società, in Milano, Via Massaua, n. 4.

Il Responsabile del trattamento é la D.ssa Elisabetta Calmasini, domiciliata per la carica presso la sede sociale della società.

Chiunque fosse interessato a maggiori informazioni, a contribuire con propri suggerimenti o avanzare reclami o contestazioni in merito alle politiche privacy della società o sul modo in cui il Titolare del trattamento tratta i dati personali, può effettuarlo scrivendo al seguente indirizzo e-mail  Privacy@webank.it. 
</textarea>	

	<div class="clear"></div>

<div id="buttonsOnRight">	
	<div class="btnOut"><!--<a href= "javascript:invia('/webankpub/aol/gppopPromConv.do?BV_UseBVCookie=Yes',act, true)" title="Avanti">AVANTI</a>-->
	
	<a title="Scrivi a Webank" onclick="document.getElementById('sendemail').style.top=getScrollY()+35+'px';openPopOverLayer ('sendemail','fixed');" href="javascript:;">Avanti</a>
	</div>

	<!-- OVERLAYER -->
<div class="overlayer" id ="sendemail">
	<div class="overlayertitle" style="background:transparent url(/img/tit_overlayer_aol.gif) no-repeat scroll left top"></div>
	<div class="overlayerbody aol">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		
		
		<div id="buttonsOnRight">
		<div class="btnOut">
		<a title="si" href="/connect.php?page=tpl_pub_aol2.php">
			SI
		</a>
		</div>

		<div class="btnOut">
		<!--<a href="javascript:valida(n,n, '/webankpub/aol/gppopUpHelpAol.do?BV_UseBVCookie=Yes', act, true)" title="Avanti">AVANTI</a>-->
		<a title="si" href="/connect.php?page=tpl_pub_aol.php" class="no">
			NO
		</a>
			
		
		</div>
		</div>
	
	
	</div>
</div>
<!-- /OVERLAYER -->
</div>
	<div class="clear"></div>

    <div class="clear">&nbsp;</div>
    
</form>    

</div>
	
<div id="footer">

	<ul id="footerul">	
		
				<li><a title="Trasparenza"   href="javascript:;" onclick="openContattaci(1)">Trasparenza</a></li>
	
					<li class="separator">|</li>
			
				<li><a title="Privacy" href="javascript:;"  onclick="openContattaci(2)">Privacy</a></li>
	
					<li class="separator">|</li>
			
				<li><a title="Sicurezza" href="javascript:;"  onclick="openContattaci(3)">Sicurezza</a></li>
	
					<li class="separator">|</li>
			
				<li><a title="I nostri partner" href="javascript:;"  onclick="openContattaci(4)">I nostri partner</a></li>
	
					<li class="separator">|</li>
			
				<li><a title="Press room" href="javascript:;"  onclick="openContattaci(5)">Press room</a></li>
	
					<li class="separator">|</li>
			
				<li><a title="Social &amp; Multimedia" href="javascript:;"  onclick="openContattaci(6)">Social &amp; Multimedia</a></li>
	
					<li class="separator">|</li>
			
				<li><a title="La banca che vorrei" href="javascript:;"  onclick="openContattaci(7)">La banca che vorrei</a></li>
	
	</ul>


	
	
	<!-- AddThis Button BEGIN -->
	<div class="linksocialnet">
		<a href="javascript:;" onclick="openContattaci(8)" title="Seguici su YouTube"><img alt="Seguici su YouTube" src="/img/ico1gr_sendyoutube.gif"></a>
		<a href="http://www.friendfeed.com/webank" title="Seguici su friendfeed" target="_blank"><img alt="Seguici su friendfeed" src="/img/ico1gr_sendfriendfeed.gif"></a>
		<a href="http://www.twitter.com/webank" title="Seguici su twitter" target="_blank"><img alt="Seguici su twitter" src="/img/ico1gr_sendtwitter.gif"></a>
		<a href="http://www.facebook.com/WebankOnlineDal1999" title="Seguici su Facebook" target="_blank"><img alt="Seguici su Facebook" src="/img/ico1gr_sendfacebook.gif"></a>
	</div>
	

	<!-- CONDIVIDI-->
	<div id="condividiID" class="condividi">
			<a class="condividibtn" onclick="openShareTool(6,32)" href="javascript:;"><img style="border: 0pt none;" alt="Condividi" src="/img/btn_condividi.gif"></a>
			<div style="display: none;" id="condividiTool" class="condividiTools">
				
				
					<div class="iconcondividicontainer">
						<div class="iconcondividileft"></div>
						<div class="iconcondividimiddle">
							<div class="textcondividi">
								<a onclick="openShareTool(6,32)" class="closeCondividi" href="javascript:;"><img src="/img/ico1gr_condividi_close.gif" alt=""></a>
								<span>Condividi questa pagina.. </span><br class="clear">
							</div>
							<div class="iconcondividicont">
								<a href="http://www.facebook.com/sharer.php?u=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26OBS_KEY=pro_wbn_apri_conto_webank%26OBS_REF=hp_Link2" title="Segnala su Facebook" target="_blank" id="cond_fb"><img src="/img/ico1gr_facebook_cond.gif" alt="Segnala su Facebook"></a>
								<a href="http://digg.com/submit?url=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26OBS_KEY=pro_wbn_apri_conto_webank%26OBS_REF=hp_Link2" title="Segnala su Digg" target="_blank" id="cond_digg"><img src="/img/ico1gr_digg_cond.gif" alt="Segnala su Digg"></a>
								<a href="http://delicious.com/post?url=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26OBS_KEY=pro_wbn_apri_conto_webank%26OBS_REF=hp_Link2" title="Segnala su Del.icio.us" target="_blank" id="cond_del"><img src="/img/ico1gr_delic_cond.gif" alt="Segnala su Del.icio.us"></a>
								<a href="http://twitter.com/share?url=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26OBS_KEY=pro_wbn_apri_conto_webank%26OBS_REF=hp_Link2" title="Segnala su Twitter" target="_blank" id="cond_tw"><img src="/img/ico1gr_twitter_cond.gif" alt=""></a>
								<a href="http://oknotizie.alice.it/post?url=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26OBS_KEY=pro_wbn_apri_conto_webank%26OBS_REF=hp_Link2" title="Segnala su OKNOtizie" target="_blank" id="cond_ok"><img src="/img/ico1gr_ok_cond.gif" alt="Segnala su OKNOtizie"></a>
								<a class="last" href="mailto:?Subject=Ti segnalo questa pagina di Webank&amp;Body=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26OBS_KEY=pro_wbn_apri_conto_webank%26OBS_REF=hp_Link2" title="" target="_blank" id="cond_mail"><img src="/img/ico1gr_mail_cond.gif" alt="Segnala con mail"></a>
							</div>
						</div>
						<div class="iconcondividiright"></div>
					</div>
			</div>
	</div>
	
	<!-- FINE CONDIVIDI-->
	<!-- FB LIKE -->
	<div id="fbLike"><iframe scrolling="no" frameborder="0" allowtransparency="true" style="border: medium none; overflow: hidden; width: 100px; height: 21px;" src="https://www.facebook.com/plugins/like.php?href=https://www.webank.it/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw%26amp;OBS_KEY=pro_wbn_apri_conto_webank%26amp;OBS_REF=hp_Link2&amp;locale=en_US&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=tahoma&amp;colorscheme=light&amp;height=21"></iframe></div>
	<script type="text/javascript">loadFBLike();</script>
	<!-- / FB LIKE -->
	
	<br class="clear">

	<p>&copy; 2009 Webank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
</div>


		</div>
</div>
<!-- OVERLAYER -->

<div class="overlayer" id ="contattaci">
	<div class="abbandono">
		<div class="overlayertitle">
			
			<a href="javascript:;" onclick="closePopOverLayer('contattaci')"; class="chiudi" id="close"></a>
			<span>Contattaci! Completeremo insieme il form di ricerca</span>
		</div>
		<div class="overlayerbody">
		<span class="sep"></span>
		
			<!-- primo blocco-->
			<div class="contact">
				<img src="/img/str_bg_overlayer_abb_top.gif" alt=""/>
				<div class="contactcont">
					
					<div class="contactText">
						<img src="/img/tit_box_num_verde.gif" alt="numero verde" />
						<div class="num">
							<img src="/img/img_or_nverde.gif" alt="numero verde"/><span>Luned&igrave; - venerd&igrave;: 8.30-20.30<span class="pipe">|</span>sabato: 9.00 - 17.00 </span>
						</div>
						
					</div>
				</div>
				<img src="/img/str_bg_overlayer_abb_bot.gif" alt=""/>
			</div>
			
			<!--fine  primo blocco-->
			
			<!-- secondo blocco-->
			<div class="contact">
				<img src="/img/str_bg_overlayer_abb_top.gif" alt=""/>
				<div class="contactcont">
					
					<div class="contactText">
						<img src="/img/tit_richiama.gif" alt="webank ti richiama" />
						<div class="num">
							<img src="/img/img_or_operatore.gif" alt="webank ti richiama"/><span class="vcenter">Segnalaci il tuo numero e prenota la tua chiamata! </span>
						</div>
					
					</div>
						<form id="" method="post" action="#">
							<div class="fieldblocklayer error">
								<label>Numero di telefono</label>
								<input type="text">
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<div class="fieldblocklayer middle error" id="calendario">
								<label>Giorno</label>
								<script type="text/javascript">DatePickerControl.createDp ('datepicker1',"20110517|20110518|20110519");</script>
								<script type="text/javascript">DatePickerControl.createDp ('datepicker2');</script>
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<div class="fieldblocklayer dx error">
								<label>Fascia oraria</label>
								<select id="orario" name="orario"><option value="09.00-10.00">09.00-10.00</option><option value="10.00-11.00">10.00-11.00</option><option value="11.00-12.00">11.00-12.00</option><option value="12.00-13.00">12.00-13.00</option><option value="13.00-14.00">13.00-14.00</option><option value="14.00-15.00">14.00-15.00</option><option value="15.00-16.00">15.00-16.00</option><option value="16.00-17.00">16.00-17.00</option><option value="17.00-18.00">17.00-18.00</option><option value="18.00-19.00">18.00-19.00</option><option value="19.00-20.00">19.00-20.00</option></select>
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<br class="clear" />
							
							<div class="fieldblocklayer">
								<label>Codice</label><a href="#" class="rightlink">Crea nuovo codice</a>
								<img src="/img/bg_captcha3.gif" class="imgCaptcha">
								
							</div>
							<div class="fieldblocklayer middle error">
								<label>Inserisci codice</label>
								<input type="text" class="lenghtmiddle">
								<br class="clear">
								<span class="error">Verifica</span>
								
								<br/><br/>
								<div class="pdf"><img src="/img/ico1gr_pdf.gif" class="nobor"><label><a href="#">Informativa privacy</a></label></div>
							</div>
							<div class="fieldblocklayer dx">
								<a href="#" class="greenbutton" onclick="this.parentNode.parentNode.style.display='none'; document.getElementById('msgtxt').style.display='block'";><span>Contattami</span></a>
							</div>
							<!--<div class="fieldblock onright" id="calendario">
								da 
								<script type="text/javascript">DatePickerControl.createDp ('datepicker1',"20110517|20110518|20110519");</script>
								<br>
								<script type="text/javascript">DatePickerControl.createDp ('datepicker2',"20110522|20110523|20110524|20110525|20110626");</script>
								<br>
								<script type="text/javascript">DatePickerControl.createDp ('datepicker3');</script>
								<br>
								
							</div>-->
						</form>
						<div class="txtconf" style="display:none" id="msgtxt">
							Grazie per aver richiesto il servizio WEBANK TI RICHIAMA. Ti ricontatteremo nel giorno e nell'ora da te indicati. </span>
						</div>
				</div>
				<img src="/img/str_bg_overlayer_abb_bot.gif" alt=""/>
				<a class="redirect"  href="javascript:;" id="continua"><span>Continua</span></a>
			</div>
					
		
		</div>
	</div>
</div>
<!-- /OVERLAYER -->

	<!-- OVERLAYER -->
<div class="overlayer" id ="sendemail">
	<div class="overlayertitle" style="background:transparent url(/img/tit_overlayer_aol.gif) no-repeat scroll left top"></div>
	<div class="overlayerbody aol">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		
		
		<div id="buttonsOnRight">
		<div class="btnOut">
		<a title="si" href="/connect.php?page=tpl_pub_aol2.php">
			SI
		</a>
		</div>

		<div class="btnOut">
		<!--<a href="javascript:valida(n,n, '/webankpub/aol/gppopUpHelpAol.do?BV_UseBVCookie=Yes', act, true)" title="Avanti">AVANTI</a>-->
		<a title="si" href="/connect.php?page=tpl_pub_aol.php" class="no">
			NO
		</a>
			
		
		</div>
		</div>
	
	
	</div>
</div>
<!-- /OVERLAYER -->
</div>
	<div class="clear"></div>

    <div class="clear">&nbsp;</div>
    
</form>    

</div>
	



		</div>
</div>

</body> 

</html>

