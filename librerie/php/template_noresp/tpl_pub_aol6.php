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
<!-- aol.step5 -->


















<!-- LINK CSS -->
<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

<!-- INIZIO JAVASCRIPT -->
<script type="text/javascript" src="/wscmn/js/ret/TXTcommon.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTlogin.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTinfoLegale.js"></script>

<script type="text/javascript" src="/wscmn/js/ret/TXTmanagePageExpiration.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTcommonAol.js"></script>
<script type="text/javascript" src="/js/ret/bloccodati.js"></script>
<script type="text/javascript" src="/js/ret/wz_tooltip.js"></script>

<script type="text/javascript">
<!--
	noBack();
//-->
</script> 

<script type="text/javascript">
<!--
	function goMyBozza(){
		goBozze(document.aol, '/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&funz=bozze&fromAol=yes&CNT_TARGET=Privati&numPag=5', 5);
	}
//-->
</script>



<h2>Richiesta di apertura del Conto Webank, il conto tutto online di Webank</h2>

<p>Ti serve una mano per compilare la richiesta? Chiamaci al numero verde <span class="evidente">800 148 149</span>.</p>





<div class="step "><span>1</span> Dati intestatari</div>
<div class="step"><span>2</span> Servizi</div>
<div class="step"><span>3</span> Modalità riconoscimento</div>

<div class="step"><span>4</span> Riepilogo</div>
<div class="onStep step lastStep"><span>5</span> Informative</div>

<div class="clear"></div>










<!-- Gestione promozioni e convenzioni -->




	<div class="offerta2">
			<div class="offleft">
				<span>3% SUL VINCOLO A 12 MESI</span><br />
			</div>

			<div class="offright">
				<a href="#" onmouseover="Tip('<strong>Dettaglio Promozione</strong><br>- Il tasso di interesse promozionale del 3% lordo è riferito al deposito vincolato a 12 mesi.<br>- L&rsquo;<strong>apertura</strong> del conto Webank deve essere effettuata tra il 13/11/2009 e il 10/02/2010.<br>- L&rsquo;<strong>attivazione</strong> del vincolo ai fini della promozione sarà possibile fino al 22 febbraio 2010.<br>Sono esclusi i già clienti delle banche del Gruppo Bipiemme e coloro che hanno chiuso un conto corrente del Gruppo dal 01/10/2009.<br><br>Per &rsquo;<i>apertura del conto Webank</i>&rsquo; si intende la conclusione del contratto ai sensi dell&rsquo;art. 2 della Sezione VIII &rsquo;norme generali che regolano il servizio Webank&rsquo; contenuta nelle &rsquo;Condizioni generali per l&rsquo;apertura dei rapporti con Webank&rsquo;.Per &rsquo;<i>già cliente delle Banche del Gruppo Bipiemme</i>&rsquo; si intende il titolare di un conto corrente presso una delle Banche del Gruppo Bipiemme (Banca Popolare di Milano, Banca di Legnano, Cassa di Risparmio di Alessandria, Banca di Mantova e WeBank).', WIDTH, 400, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1">verifica le condizioni per aderire</a><img src="/img/ret/btn_offerta.gif" align="absmiddle" alt=""/>
			</div>
			<div class="clear"></div>
			<div class="offtext">
				Sul Conto che stai per aprire sarà attivata la promozione con tasso di interesse lordo pari al 3% sul vincolo a 12 mesi.
Condizioni valide fino al 22 febbraio 2010.	
			</div>
	</div>
		





<form name = "aol" action="/webankpub/wb/2l/do/aol/wbwsPUconferma.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" method= "post">
<input type="hidden" name="oksub5" value="nullo" />
<input type="hidden" name="fromPageName" value="wsPUaol4.jsp" />
<input type="hidden" name="OBS_KEY" value='pro_wbn_apri_contome0' />
<input type="hidden" name="BV_UseBVCookie" value="Yes" />
<input type="hidden" name="salta_consenso" value="">

<input type="hidden" name="flag_stato" value="Da assegnare">

<br class="clear" />
<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret//str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Informative</h2><img src="/img/ret//ico1gr_aol_acc_opened.gif"/><br class="clear" /></div><div class="cont" style="display:block;">
<div>

	<h3>INFORMATIVA PRECONTRATTUALE</h3>
	<p>Ti informiamo che:<br />
	<br />
	a) &egrave; tuo diritto ricevere copia di tutta la documentazione contrattuale, idonea per la stipula e per una ponderata valutazione del contenuto;<br />
	b) questo diritto non pu&ograve; essere sottoposto a termini e condizioni;<br />

	c) l'esercizio di tale diritto non impegna le parti a stipulare il contratto.<br />
	</p>
	<div class="tab1d">
		<input type="radio" name="info_precontrattuale" value="1" onclick="document.aol.mod_precontratti.disabled=false;" class="bgReset" />
		<strong>Selezionando questa casella dichiari di avvalerti di questo diritto e riconosci di aver stampato o salvato copia completa del testo contrattuale.</strong>
	<div class="clear"></div>
	</div>
	<div class="tab2b">

		<input type="radio" name="info_precontrattuale" value="2" onclick="document.aol.mod_precontratti.disabled=true;document.aol.mod_precontratti.checked=false;" class="bgReset" />
		<strong>Selezionando questa casella dichiari di non volerti avvalere di questo diritto.</strong></div>
	<div class="clear"></div>
	<br />
	
	Clicca sul file <a href="/webankpub/aol/wbzipDocumentazioneVisualizer.do?BV_UseBVCookie=Yes&haveCT=false" name="ancora1b" title="Documentazione"  target="_bank">pdf</a> per visualizzare copia di tutta la documentazione contrattuale: <a href="/webankpub/aol/wbzipDocumentazioneVisualizer.do?BV_UseBVCookie=Yes&haveCT=false" name="ancora1b" title="Documentazione"  target="_bank"><img alt="pdf" src="/img/pdf_small.gif"></a> &nbsp;(2732 Kb)<br /><br />

	<table>
		<tr>
			<td width="300">Avviso sulla trasparenza</td>
			<td>Informativa precontrattuale sui contratti e servizi a distanza</td>
		</tr>
		<tr>
			<td>Foglio informativo</td>

			<td></td>
		</tr>
		<tr>
			<td>Documento di sintesi</td>
			<td></td>
		</tr>
		<tr>
			<td>Condizioni generali</td>

			<td></td>
		</tr>
		<tr>
			<td>Modulo di richiesta Webank</td>
			<td></td>
		</tr>
	</table>
	
	<br /><br />	
	<div class="tab1d">

		<input type="checkbox" name="mod_precontratti" value="1" disabled />
		<strong>Confermare la presa visione e acquisizione dell'informativa precontrattuale</strong></div>
	<div class="clear"></div>
	<div class="sep"></div>	

	<h3>DOCUMENTAZIONE CONTRATTUALE E DI TRASPARENZA</h3>
	
	Per procedere, stampa o salva sul tuo pc i documenti sotto elencati:
	<br /><br />
	
	<!--<a class="link" href="/wbx/res/doc/Avviso_trasparenza_Webank.pdf" title="Avviso sulla Trasparenza (PDF 66Kb)"  target="_bank">Avviso sulla Trasparenza - Foglio informativo - Documento di sintesi</a><br />
	<a class="link" href="/doc/FI/4.18.0.pdf" title="Foglio informativo" target=_blank">Foglio informativo</a><br />
	<a class="link" href="/wbx/res/doc/Documento_di_sintesi.pdf" title="Documento di sintesi (PDF 133Kb)" target="_blank">Documento di sintesi (PDF 133 Kb)</a><br />
	<a class="link" href="/wbx/res/doc/COND_GENERALI_BANCA.pdf" title="Condizioni generali (PDF 182Kb)" target="_blank">Condizioni generali - Servizi a distanza</a><br />
	<a class="link" href="/wbx/res/doc/contratto_webank.pdf" title="Modulo di richiesta Webank (PDF 188Kb)" target="_blank">Modulo di richiesta Webank (PDF 188 Kb)</a><br />
	
	
	-->
	<div class="tab1ddoc">

		<a class="link" href="/webankpub/aol/wbdocumentazioneVisualizer.do?BV_UseBVCookie=Yes" name="ancora1b" title="Avviso sulla Trasparenza - Foglio informativo - Documento di sintesi"  target="_blank" onclick="javascript:document.aol.stampato1b.checked=true;">Avviso sulla Trasparenza - Foglio informativo - Documento di sintesi (PDF 1077 Kb )</a>
	<div class="clear"></div>
	</div>
	<div class="tab2bdoc">
		<input type="checkbox" id="stampato1b" name="stampato1b" disabled="disabled" class="bgReset" />
		 stampato/salvato</div>
	<div class="clear"></div>
	<div class="tab1ddoc">

		<a class="link" name="ancora2b" href="/webankpub/aol/wbdocumentazioneMergerVisualizer.do?BV_UseBVCookie=Yes&pdfMerge=informativa_precontrattuale_art_190.pdf~COND_GENERALI_BANCA.pdf" title="Condizioni generali - Informativa precontrattuale sui servizi a distanza" target="_blank" onclick="javascript:document.aol.stampato2b.checked=true;" >Condizioni generali - Informativa precontrattuale sui servizi a distanza (PDF 243Kb)</a>
	<div class="clear"></div>
	</div>
	<div class="tab2bdoc">
		<input type="checkbox" id="stampato2b" name="stampato2b" disabled="disabled" class="bgReset" />
		 stampato/salvato</div>
	<div class="clear"></div>
	
	<div class="tab1ddoc">

		<a class="link" name="ancora3b" href="/wbx/res/doc/contratto_webank.pdf" title="Modulo di richiesta Webank" target="_blank" onclick="javascript:document.aol.stampato3b.checked=true;">Modulo di richiesta Webank (PDF 188 Kb)</a>
	<div class="clear"></div>
	</div>
	<div class="tab2bdoc">
		<input type="checkbox" id="stampato3b" name="stampato3b" disabled="disabled" class="bgReset" />
		 stampato/salvato</div>
	<div class="clear"></div>
	
	
	<p>Dichiaro e riconosco di aver preso visione ed acquisito copia su supporto duraturo dei documenti sopra elencati.</p>

	<div class="tab1b">
		<input type="checkbox" name="trasparenza" value="1"/>
	 	<strong>Presa visione</strong></div>	
	<div class="clear"></div>
	
	<div class="sep"></div>
	
	<h3>INFORMATIVA PRECONTRATTUALE SUI CONTRATTI E SERVIZI A DISTANZA</h3>
	<a class="link" href="/wbx/res/doc/informativa_precontrattuale_art_190.pdf" title="Diritto di recesso (PDF 33Kb)" target="_bank">Diritto di recesso (PDF 33 Kb)</a><br />
	<p>Prendo atto che ho facolt&agrave; di recedere dal contratto entro 14 giorni dalla comunicazione di conclusione del contratto.</p>

	<div class="tab1b">
		<input type="checkbox" name="servizi_distanza" value="1"/>
		<strong>Presa visione</strong></div>	
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
	<br>
	<br>
	<p>Dichiaro di aver ricevuto l'Informativa resami ai sensi dell'articolo 13 del Decreto Legislativo 30 giugno 2003, n. 196 e di averne compreso il contenuto.</p>
		

	<h3>Consenso per il trattamento dei dati sensibili</h3>
	<p>Consapevole che per l'esecuzione degli obblighi derivanti dai rapporti contrattuali instaurati con Webank S.p.A. potranno essere trattati dati di natura sensibili - così come definiti nell'informativa,</p>
	<div class="tab1">

		<input type="radio" name="consDatiSensibili" value="0" class="bgReset" />
		<strong>Do il consenso</strong></div>
	<div class="tab2long">
		<input type="radio" name="consDatiSensibili" value="1" class="bgReset" />
		<strong>Non do il consenso</strong></div>
	<br>
	<br>
	<p>

		al trattamento dei miei dati sensibili.
	</p>
	<div class="clear"></div>
	
	<h3>Consenso per il trattamento dei dati Personali a fini di promozione di prodotti e servizi webank e Gruppo BPM e per il compimento di ricerche di mercato o di comunicazione commerciale </h3>
	<p>Consapevole che l'esecuzione delle finalit&agrave; di rilevazione del grado di soddisfazione della clientela sulla qualit&agrave; dei servizi resi, promozione di prodotti e servizi di webank e delle società del Gruppo BPM, elaborazione di studi e ricerche di mercato, richiedono il consenso</p>
	<div class="tab1">

		<input type="radio" name="consDatiPersonali" value="0" class="bgReset" />
		<strong>Do il consenso</strong></div>
	<div class="tab2long">
		<input type="radio" name="consDatiPersonali" value="1" class="bgReset" />
		<strong>Non do il consenso</strong></div>
	<br>
	<br>
	<p>al trattamento dei miei dati personali per le suddette finalità.</p>

	<div class="clear"></div>
	
	<h3>Consenso per il trattamento dei dati Personali a fini di promozione di prodotti e servizi di Terzi Soggetti</h3>
	<p>Consapevole, inoltre, che l'esecuzione delle finalit&agrave; di promozione di prodotti e servizi di bancari e finanziari di terzi soggetti richiedono il consenso.</p>
	<div class="tab1">
		<input type="radio" name="cons_5" value="0" class="bgReset" />
		<strong>Do il consenso</strong></div>

	<div class="tab2long">
		<input type="radio" name="cons_5" value="1" class="bgReset" />
		<strong>Non do il consenso</strong></div>
	<br>
	<br>
	<p>al trattamento dei miei dati personali per le suddette finalit&agrave;.</p>
	<div class="clear"></div>

	
	<h3>Consenso per la comunicazione di dati Personali a Terzi Soggetti a fini di promozione di prodotti e servizi di Terzi Soggetti e ricerche di mercato</h3>
	<p>Consapevole, inoltre, che la comunicazione a terzi soggetti di dati personali finalizzata allo svolgimento di iniziative promozionali e ricerche di mercato, richiedono il consenso.</p>
	<div class="tab1">
		<input type="radio" name="cons_6" value="0" class="bgReset" />
		<strong>Do il consenso</strong></div>
	<div class="tab2long">
		<input type="radio" name="cons_6" value="1" class="bgReset" />

		<strong>Non do il consenso</strong>
	</div>
	<br>
	<br>
	<p>alla comunicazione dei miei dati personali a terzi soggetti per le suddette finalit&agrave;.</p>
	<div class="clear"></div>
	<div class="sep"></div>

		
	<h3>INFORMATIVA E CONSENSO DELL'ART. 5 DEL "CODICE DEONTOLOGICO SUI SISTEMI DI INFORMAZIONI CREDITIZIE"</h3>
	<textarea class="attcont">RIFERIMENTI NORMATIVI

Direttiva 95/46/CE - del 24 ottobre 1995 relativa alla "tutela delle persone fisiche con riguardo al trattamento dei dati personali, nonché alla libera circolazione di tali dati"
Direttiva 2002/58/CE - relativa al "trattamento dei dati personali e alla tutela della vita privata nel settore delle comunicazioni elettroniche"
Decreto Legislativo 30 giugno 2003, n. 196 - "Codice in materia di protezione dei dati personali"

IL "TITOLARE" DEL TRATTAMENTO

L'accesso e l'utilizzo dei servizi on line in essere prevede il trattamento di dati relativi a persone identificabili mediante sistemi e procedure di autenticazione.
La mera consultazione del sito internet, senza accesso ai servizi on line, prevede la raccolta di informazioni. la cui trasmissione è implicita nell'uso dei protocolli di comunicazione di Internet e di informazioni relative all'elaboratore utilizzato per la connessione.

Il Titolare del trattamento dei dati personali é WeBank S.p.A., in persona del legale rappresentante pro-tempore domiciliato per la carica presso la sede sociale della società, in Milano, Via Massaua, n. 4.

LUOGO DI TRATTAMENTO DEI DATI

I trattamenti connessi ai servizi web di questo sito hanno luogo presso la sede del Titolare e sono curati solo da personale Incaricato del trattamento, oppure da eventuali incaricati di occasionali operazioni di manutenzione. I dati personali degli utenti che accedono e utilizzano i servizi on line potranno essere comunicati a terzi soggetti rispetto al Gruppo BPM, ciò in adempimento ad obblighi di legge, obblighi regolamentari ed obblighi di vigilanza.

TIPI DI DATI TRATTATI

Dati di navigazione
Consultazione, accesso ed  utilizzo dei servizi on-line


I sistemi informatici e le procedure software preposte al funzionamento di questo sito web acquisiscono, nel corso del loro normale esercizio, alcuni dati personali la cui trasmissione è implicita nell'uso dei protocolli di comunicazione di Internet.

Si tratta di informazioni che non sono raccolte per essere associate a interessati identificati, ma che per loro stessa natura potrebbero, attraverso elaborazioni ed associazioni con dati detenuti da terzi, permettere di identificare gli utenti.

In questa categoria di dati rientrano gli indirizzi IP o i nomi a dominio dei computer utilizzati dagli utenti che si connettono al sito, gli indirizzi in notazione URI (Uniform Resource Identifier) delle risorse richieste, l'orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server, la dimensione del file ottenuto in risposta, il codice numerico indicante lo stato della risposta data dal server (buon fine, errore, ecc.) ed altri parametri relativi al sistema operativo e all'ambiente informatico dell'utente.

Questi dati vengono utilizzati ai soli fini di 
- ricavare informazioni statistiche anonime sull'uso del sito
- controllare il corretto funzionamento del sito
- svolgere attività di monitoraggio a supporto della sicurezza del servizio

I dati potrebbero essere conservati ed utilizzati per l'accertamento di responsabilità in caso di ipotetici reati informatici ai danni del sito o dei suoi utilizzatori..
 
Dati forniti volontariamente dall'utente 
Accesso ed utilizzo dei servizi on-line

L'inserimento libero, esplicito e volontario di dati personali da parte dell'utente nei form di registrazione presenti su questo sito comporta la successiva acquisizione dei dati forniti dal mittente, necessari per l'erogazione del servizio richiesto. Specifiche informative di sintesi verranno a seconda dei casi riportate o visualizzate nei documenti contrattuali o nelle pagine del sito predisposte per particolari servizi a richiesta.

COOKIES

Il sito utilizza cookies di sessione e cookies statici per la tracciatura della navigazione degli utenti; i dati vengono utilizzati unicamente in forma anonima e statistica per finalità di natura statistica interna nonché, in associazione con i dati dell'utente, per le attivtà di monitoraggio antifrode in adempimento agli obblighi di legge.

FACOLTATIVITA' DEL CONFERIMENTO DEI DATI

A parte quanto specificato per i dati di navigazione, l'utente è libero di fornire i dati personali riportati nei moduli di richiesta o comunque indicati in contatti con l'Ufficio per sollecitare l'invio di materiale informativo o di altre comunicazioni. Il loro mancato conferimento potrebbe comportare l'impossibilità di ottenere quanto richiesto.

MODALITA' DEL TRATTAMENTO

I dati personali sono trattati con strumenti automatizzati per il tempo strettamente necessario a conseguire gli scopi per cui sono stati raccolti.

Specifiche misure di sicurezza sono osservate per prevenire la perdita dei dati, usi illeciti o non corretti ed accessi non autorizzati.

CONDIVISIONE, COMUNICAZIONE E DIFFUSIONE DEI DATI

I dati raccolti potranno essere trasferiti o comunicati ad altre società controllanti, controllate o collegate nell'ambito del Gruppo BPM per attività strettamente connesse e strumentali all'operatività del servizio.

I dati personali forniti dagli utenti sono utilizzati al fine di eseguire il servizio o la prestazione richiesta nonché per informazioni di natura pubblicitaria o promozionale e sono comunicati a terzi nel solo caso in cui ciò sia a tal fine necessario per la fornitura dei servizi richiesti.

Al di fuori di questi casi, i dati non saranno comunicati, né concessi ad alcuno, salvo previsione contrattuale o autorizzazione dei soggetti. In questo senso, i dati personali potrebbero essere trasmessi a terze parti, ma solo ed esclusivamente nel caso in cui:
1. vi sia consenso esplicito a condividere i dati con terze parti;
2. vi sia la necessità di condividere con terzi le informazioni al fine di prestare il servizio richiesto; 
3. ciò sia necessario per adempiere a richieste dell'Autorità Giudiziaria o di Pubblica Sicurezza.

Nessun dato derivante dal servizio web viene diffuso.

DIRITTI DEGLI INTERESSATI

I soggetti cui si riferiscono i dati personali hanno il diritto in qualunque momento di ottenere la conferma dell'esistenza o meno dei medesimi dati e di conoscerne il contenuto e l'origine, verificarne l'esattezza o chiederne l'integrazione o l'aggiornamento, oppure la rettificazione (art. 7 del Decreto legislativo 30 giugno 2003, n. 196). Ai sensi del medesimo articolo si ha il diritto di chiedere la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, nonché di opporsi in ogni caso, per motivi legittimi, al loro trattamento.
 

MODIFICHE ALLE PRESENTI POLITICHE SULLA PRIVACY

Il Titolare del trattamento verifica periodicamente le proprie politiche relative alla privacy e alla sicurezza e, se del caso, le rivede in relazione alle modifiche normative, organizzative o dettate dall'evoluzione tecnologica. In caso di modifica delle politiche, la nuova versione sarà pubblicata in questa pagina del sito.

DOMANDE, RECLAMI E SUGGERIMENTI

Chiunque fosse interessato a maggiori informazioni, a contribuire con propri suggerimenti o avanzare reclami o contestazioni in merito alle politiche privacy della società o sul modo in cui il Titolare del trattamento tratta i dati personali, può effettuarlo scrivendo al seguente indirizzo e-mail  Privacy@webak.it.
</textarea>	
	<p>In relazione all'informativa fornita</p>
	<div class="tab1">
		<input type="radio" name="cons_7" value="0" class="bgReset" />
		<strong>Do il consenso</strong></div>
	<div class="tab2long">

		<input type="radio" name="cons_7" value="1" class="bgReset" />
		<strong>Non do il consenso</strong></div>
	<div class="clear"></div>
	<p>al trattamento dei dati personali per la conservazione delle notizie relative ai rapporti che si sono svolti positivamente (senza ritardi nei pagamenti o altri eventi negativi). </p>	
	<div class="clear"></div>
	<div class="sep"></div>
	
	<h3>COMUNICAZIONE A DISTANZA</h3>
	<p>

	Per poter comunicare con te attraverso tecniche a distanza quali ad esempio la posta elettronica (e-mail) o il telefono, necessitiamo del tuo consenso. A tal proposito ti informiamo che l'operativit&agrave; a distanza caratterizza tutti i servizi Webank. Pertanto, in mancanza del tuo consenso, saremo impossibilitati a procedere all'apertura del rapporto che ci hai richiesto.
	</p>
	<div class="tab1">
		<input type="radio" name="consDoc" value="1" class="bgReset"/>
	 	<strong>Do il consenso</strong></div>
	<div class="tab2long">
		<input type="radio" name="consDoc" value="0" class="bgReset"/> 
		<strong>Non do il consenso</strong></div>

	<div class="clear"></div>
	<div class="sep"></div>
	
</div>

</div>
</div>

<p>
	Per visualizzare i documenti occorre aver installato Acrobat Reader.<br>
	<a href="http://www.adobe.it/products/acrobat/readstep2.html" target="_blank" class="link">Scarica Acrobat Reader</a>

</p>
<div class="sep"></div>
	
<div id="buttonsOnLeft">
	<div class="btnOut white">
		<!--<a href="/webankpub/wb/2l/do/aol/wbwsAolRiepilogoDati.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" title="Indietro">
		INDIETRO</a>-->
	<a href= "/connect.php?page=tpl_pub_aol5.php" title="Avanti">INDIETRO</a>
	</div>
</div>

<div id="buttonsOnRight">	
	

	
	<div class="btnOut">

		<a href="javascript:openAlert('salvaInBozza');">
		SALVA BOZZA
	</a>
	</div>
		

	
<div class="btnOut">
	<!--<a href="javascript:verificaCons(1,'/webankpub/aol/gpalertInfoPrecontrattuale.do?BV_UseBVCookie=Yes','/webankpub/aol/gppopUpHelpAol.do?BV_UseBVCookie=Yes', false);" title="Conferma">
	CONFERMA E INVIA LA RICHIESTA</a>-->
	<a href= "/connect.php?page=tpl_pub_aol7.php" title="Avanti">CONFERMA E INVIA LA RICHIESTA</a>
	
	</div>
</div>

<div class="clear"></div>


</div> 
</form>




<!-- se sto arrivando dalle bozze lo avviso della ricompilazione  -->












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

