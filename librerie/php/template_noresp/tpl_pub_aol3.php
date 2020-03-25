<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		 

		 		 


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">		 

<head>
		 <title>Webank - Aprilo subito</title>
		 		 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">  
		 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		 <meta http-equiv="Content-Language" content="it" />
		 <meta name="author" content="We@service S.p.a" />
		 <meta name="description" content="Webank - La banca online dal 1999" />
		 <meta name="keywords" content="" />

		 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
		 <link rel="shortcut icon" href="/favicon.ico" />
		  
		 <script language="javascript" type="text/javascript">
		 		 
		 		 var tabId = 'null';
		 		 var obsKey = 'pro_wbn_apri_conto_webank';
		 		 var WSarea = 0;
		 		 var imgPath = '/img/ret/';
		 		 var cgi_script = '/webankpub';
		 		 var cgi_host = 'www.webank.it';
		 		 var cgi_protocol = 'https://';

		 		 var login_action_privati = '6zy4FoYKVsBrVWzZNNIIl3iUYd.do';
		 		 var login_host_imprese = 'https://www.webank.it/webankpri/wbOnetoone/home_privata.jsp';
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

		 		 var utilizzo2 = Math.round(utilizzo * 100) / 100;
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
<script src="/js/twitterOnPage.js" type="text/javascript"></script>
<script src="/wscmn/js/ajax_low.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">getTwitters('tweets', 1);</script>
<script type="text/javascript" src="/wscmn/js/common_validation.js"></script>
</head>
<!-- wasproa1Node01/webank -->








<body>

		 <div id="pagecontainer">
		 		 <div id="main">
		 		 		 




<!-- HEADER -->
<img src="/img/lg_stampa.jpg" class="headingprint" alt="Webank">
<div id="header">
		 <h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>		 
</div>
<!-- FINE HEADER -->


		 		 		 


<div id="menu">&nbsp;</div>
		 		 		 








<div id="content" class="expanded" style="height: auto;">
<!-- NON MODIFICARE -->
<!-- aol.step2 -->



























<!-- INIZIO NUOVA WEBANK -->

<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

<!-- INIZIO JAVASCRIPT -->
<script type="text/javascript" src="/wscmn/js/ret/TXTcommon.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTlogin.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTservizi.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTmanagePageExpiration.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTcommonAol.js"></script>
<script type="text/javascript" src="/js/ret/bloccodati.js"></script>
<script src="/wscmn/js/ret/wz_tooltip.js" type="text/javascript"></script>


<script type="text/javascript">
function goMyBozza(){
		 goBozze(document.aol, '/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&funz=bozze&fromAol=yes&CNT_TARGET=Privati', 2);
}		 		 
</script>

<script type="text/javascript">
		 noBack();
</script> 



<!-- FINE JAVASCRIPT -->

<form name = "aol" action="/webankpub/wb/2l/do/aol/wbwsPUaol3.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" method= "post">
<input type="hidden" name="oksub2" value="nullo" />
<input type="hidden" name="fromPageName" value="wsPUaol2.jsp" />
<input type="hidden" name="OBS_KEY" value='pro_wbn_apri_conto_webank' />
<input type="hidden" name="BV_UseBVCookie" value="Yes" />
<input type="hidden" name="ricercaAgenzia" value="" />
<input type="hidden" name="n" value="1" />
<!-- ng con valore 1 indica che si vuole l'apertura del conto immediata (probabilmente è obsoleto)-->
<input type="hidden" value="1" name="ng" />


<!-- INTESTAZIONE -->   





<!-- Gestione promozioni e convenzioni -->


<h2>Richiesta di apertura Conto Webank</h2>
<p>Ti serve una mano per compilare la richiesta? Chiamaci al numero verde <span class="evidente">800 148 149</span>.</p>

		 



<div class="step "><span>1</span> Dati intestatari</div>

<div class="onStep step"><span>2</span> Servizi</div>
<div class="step"><span>3</span> Identificazione</div>
<div class="step"><span>4</span> Riepilogo</div>
<div class="step lastStep"><span>5</span> Informative</div>


<div class="clear"></div>
<br>

		 














<!-- Gestione promozioni e convenzioni -->




		 <div class="offerta2">
		 		 		 <div class="offleft">
		 		 		 		 <span>3% SULLA LINEA VINCOLATA A 12 MESI</span><br />
		 		 		 </div>

		 		 		 <div class="offright">
		 		 		 		 <a href="#" onmouseover="Tip('<strong>Promozione Webank ti dà il 3</strong><br>-<strong>3% lordo</strong> sulle somme vincolate per <strong>12 mesi</strong><br>Le condizioni: <br>-la <strong>richiesta di apertura</strong> di Conto Webank va inviata entro <strong>l&rsquo;8 aprile 2011</strong><br>-la <strong>linea vincolata</strong> a <strong>12</strong> mesi va aperta entro il <strong>29 aprile 2011</strong><br><br><strong>Offerta sul trading 3, 2, 1: eseguito!</strong><br>-<strong>Commissioni di trading esclusive</strong> su <strong>ogni ordine eseguito</strong> sui mercati <strong>azionari</strong> e <strong>obbligazionari</strong> italiani e sui mercati dei <strong>derivati italiani</strong> ed <strong>esteri</strong>: <br>><strong>3 euro</strong> nel <strong>primo mese, 2 euro</strong> nel <strong>secondo, 1 euro</strong> nel <strong>terzo</strong><br>>fino a un minimo di <strong>2 euro</strong> per <strong>tutto il 2011</strong>, secondo il numero di ordini eseguiti nei primi 3 mesi dell?offerta<br>-<strong>Piattaforma T3 gratuita fino al 31 dicembre 2011</strong><br>Le condizioni: <br>-la <strong>richiesta di apertura</strong> di <strong>Conto Webank</strong> e del <strong>deposito titoli</strong> va inviata tra il <strong>9 febbraio</strong> e l&rsquo;<strong>8 aprile 2011</strong><br>-il deposito deve <strong>essere aperto</strong> entro il <strong>29 aprile 2011</strong> (ricorda che l&rsquo;apertura avviene al massimo entro <strong>7 giorni lavorativi</strong> da quanto riceviamo tutti i documenti necessari compilati correttamente)', WIDTH, 400, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1">verifica le condizioni per aderire</a><img src="/img/ret/btn_offerta.gif" align="absmiddle" alt=""/>
		 		 		 </div>
		 		 		 <div class="clear"></div>
		 		 		 <div class="offtext">
		 		 		 		 <strong>Nuovo cliente? Ti riserviamo condizioni esclusive</strong>		 		 		  
<strong>Porta a casa il rendimento: 3% lordo</strong> su vincolo a <strong>12 mesi. Vuoi anche il trading?<br>Opera a condizioni esclusive!</strong> 		 
		 		 		 </div>

		 </div>
		 		 


<br>
<!--  FINE INTESTAZIONE -->


<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Il tuo Conto Webank è pronto a darti il massimo</h2><img src="/img/ret/ico1gr_aol_acc_opened.gif"/><br class="clear" /></div><div class="cont" style="display:block;">
<div>
<h3>Scopri alcuni strumenti già inclusi</h3>
<ul class="list">
		 <li>

		 		 <h4>Deposito: per far rendere i tuoi risparmi a tassi competitivi</h4>
		 		 Nel deposito integrato al tuo Conto Webank puoi versare facilmente e velocemente le somme che decidi di mettere da parte: le sposti 
		 		 con un clic <strong>dal conto corrente</strong> grazie ai <strong>trasferimenti immediati</strong> e <strong>gratuiti</strong>. 
		 		 E una volta trasferite nel deposito, puoi <strong>vincolare le somme per 3, 6 o 12 mesi</strong> per ottenere un <strong>rendimento ancora più alto</strong>.
		 </li>

		 <li>
		 		 <h4>Sportello telefonico: il conto a portata di mano anche quando non sei connesso</h4>
		 		 Consulti il <strong>saldo</strong> e i <strong>movimenti</strong>, fai <strong>bonifici</strong> e <strong>ricariche</strong>, inserisci ordini di trading: tutto con una semplice telefonata.
		 </li>

		 <li>
		 		 <h4>Accredito degli interessi e invio dell'estratto conto</h4>
		 		 Accreditiamo gli <strong>interessi</strong> delle somme in deposito e inviamo <strong>l'estratto conto</strong> ogni <strong>3 mesi</strong>. Se preferisci, <strong>scegli un'altra frequenza</strong>:
		 		 <br class="clear"/><br>

		 		 <div class="tab1">
		 		 		 <input type="radio" name="periodicita" value="Trimestrale" checked="checked" class="bgReset"> ogni 3 mesi
		 		 </div>
		 		 <div class="tab1">
		 		 		 <input type="radio" name="periodicita" value="Semestrale" class="bgReset"> ogni 6 mesi
		 		 </div>
		 		 <div class="tab1">
		 		 		 <input type="radio" name="periodicita" value="Annuale" class="bgReset"> una volta all' anno
		 		 </div>

		 </li>
</ul>
<br class="clear"/>

<h3>Aggiungi le soluzioni più convenienti e vantaggiose per prelevare, fare acquisti, investire</h3>
<ul class="list">
		 <li>
		 <h4>Cartimpronta Webank: zero costi e tanti vantaggi esclusivi</h4>
		 Cartimpronta è la <strong>carta di credito gratuita</strong> per acquisti in tutto il mondo sui circuiti <strong>MasterCard e VISA</strong>. <strong>Senza canone né spese di bollo</strong>. 
		 <strong>Non paghi commissioni</strong> sui pagamenti nell''area Euro, su <strong>carburante</strong> e su <strong>pedaggi autostradali</strong> e hai l'<strong>estensione di 1 anno della garanzia 
		 del costruttore su prodotti di elettronica e informatica</strong>. Averla è facile: richiedila dopo l''apertura del conto.
		 </li>

</ul>
<table class="checkcontainer nofil">
<tbody>
		 <tr>
		 		 <td><input type="checkbox" name="cb" value="1" checked="checked"></td>
		 		 <td>
		 		 		 <h1><b>Bancomat internazionale: pratico e gratuito</b></h1>
		 		 		 <p>
		 		 		 		 Paghi e prelevi in <strong>Italia</strong> e in tutti i paesi dell'area Euro <strong>senza commissioni</strong>. <strong>Ricarichi il cellulare</strong> dagli sportelli 
		 		 		 		 Bancomat abilitati e <strong>salti le code al casello</strong> pagando i pedaggi autostradali dalle porte <strong>FastPay/Viacard</strong>. 
		 		 		 		 <strong>Richiedi adesso il tuo Bancomat</strong>: lo ricevi subito dopo l'apertura del conto. 
		 		 		 </p>

		 		 </td>
		 </tr>
		 <tr>
		 		 <td><input type="checkbox" name="col" value="1" checked="checked"></td>
		 		 <td>
		 		 		 <h1><b>Servizio "Estratto conto e contabili online"</b></h1>
		 		 		 <p>
		 		 		 		 <strong>Ti permette di vedere online, e gratis, gli estratti e i documenti legati al conto corrente.</strong> Puoi conservarli nel tuo archivio sul sito Webank oppure salvarli sul tuo computer. 
		 		 		 		 Per saperne di pi&ugrave;, <a href="#" title="Help" id="helpResidenza" onmouseover="Tip('<b>DISCLAIMER LEGALE</b><br><br><strong>Comunicazioni via Internet ed Elezione Speciale di Domicilio:</strong><br />la Banca consente al Cliente di avvalersi del servizio di casella postale Privata (&quot;Estratto Conto e Contabili online&quot;), il cui accesso nel Sito pu&ograve; avvenire a cura del Cliente stesso mediante utilizzo di Sistemi di Identificazione: Codice Cliente e Password.<br /><br />A tale fine, il Cliente pu&ograve; eleggere domicilio speciale presso la Banca che aprirà la predetta casella postale privata con accesso riservato nel Sito Webank.<br />Resta inteso che, tale domiciliazione speciale sarà efficace esclusivamente per le comunicazioni rientranti nel servizio denominato &quot;Estratto Conto e Contabili online&quot;, le cui caratteristiche sono pubblicate nel Sito Webank. Tutte le comunicazioni non ricomprese nel servizio &quot;Estratto Conto e Contabili online&quot;, continueranno ad essere inviate al Cliente mediante posta ordinaria al domicilio di corrispondenza o alla residenza.<br /><br />Il Cliente che intende eleggere domicilio speciale per il servizio &quot; Estratto Conto e Contabili online&quot; dà atto di essere consapevole dei rischi derivanti dall&rsquo;utilizzo di un sistema di rendicontazione disponibile &quot;online&quot; in alternativa allo scritto, e che &egrave; onere e cura del Cliente provvedere alla tempestiva consultazione delle comunicazioni esistenti della Banca, la quale non &egrave; neppure tenuta a darne preavviso al Cliente.<br />In considerazione della natura del servizio (attraverso sistemi di comunicazione a distanza), la Banca si riserva la facoltà di sospenderlo e/o interromperlo, valendo in tal caso, per ogni e qualsiasi comunicazione scritta, il diverso e pi&ugrave; generale domicilio di corrispondenza.', WIDTH, 600, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1">leggi l'informativa legale</a>.
		 		 		 </p>

		 		 </td>
		 </tr>
		 
		 
		 <!-- INIZIO CUSTODIA TITOLI -->
		 
		 <tr>
		 		 <td><input type="checkbox" name="ct" value="1" checked="checked" onclick="javascript:visualizzaDiv('divCustodia',this);"></td>
		 		 <td>
		 		 		 <h1><b>Deposito titoli e servizi di investimento</b></h1>
		 		 		 <p>

		 		 		 		 Ti permette di depositare azioni e obbligazioni presso di noi e fare operazioni in Borsa dalle nostre piattaforme di trading 
		 		 		 		 online.  Per fare tutte le operazioni di trading &egrave; indispensabile richiedere i servizi di esecuzione, ricezione o 
		 		 		 		 trasmissione di ordini, il servizio di mediazione e il servizio di collocamento di strumenti finanziari.
		 		 		 </p>
		 		 		 
		 		 		 
		 		 		 		 <img src="/img/ret/ban_aol321.jpg" alt="banner 3-2-1" title="promozione 3-2-1">
		 		 		 
		 		 		 
		 		 		 <div id="divCustodia" style="position:static; visibility: hidden; display:none" class="greyboxed">
		 		 		 		 <div class="heading"><img src="/img/ret/greyboxed_top_right.gif"></div>
		 		 		 		 <div class="body">
		 		 		 		 		 <h1>1. SCEGLI IL REGIME FISCALE</h1>
		 		 		 		 		 <table>

		 		 		 		 		 		 <tbody>
		 		 		 		 		 		 <tr>
		 		 		 		 		 		 		 <td colspan="2">
		 		 		 		 		 		 		 		 Ai sensi dell'art.6 del D. Lgs. 21 novembre 1997 n. 461, e successive modifiche, il Cliente pu&ograve; richiedere di optare per l'applicazione dell'imposizione sostitutiva sulle plusvalenze, differenziali e/o proventi dei Servizi Amministrati.<br> 
		 		 		 		 		 		 		 		 Per gli effetti della normativa citata:<br>
		 		 		 		 		 		 		 </td>
		 		 		 		 		 		 </tr>

		 		 		 		 		 		 <tr>
		 		 		 		 		 		 		 <td><input type="radio" name="ct_regimenew" value="1" checked="checked" class="bgReset"></td>
		 		 		 		 		 		 		 <td>
		 		 		 		 		 		 		 		 <strong>Regime fiscale amministrato (consigliato):</strong>
		 		 		 		 		 		 		 		 il Cliente dichiara di voler optare per l'applicazione dell'imposizione sostitutiva attraverso la Banca (si tratta del regime che consente al Cliente di fruire della Banca quale sostituto d'imposta e quindi di evitare complicazioni fiscali in sede di compilazione della propria dichiarazione dei redditi).
		 		 		 		 		 		 		 </td>
		 		 		 		 		 		 </tr>
		 		 		 		 		 		 <tr>
		 		 		 		 		 		 		 <td><input type="radio" name="ct_regimenew" value="0" class="bgReset"></td>

		 		 		 		 		 		 		 <td>
		 		 		 		 		 		 		 		 <strong>Regime fiscale dichiarativo:</strong>
		 		 		 		 		 		 		 		 il Cliente dichiara di essere a conoscenza degli obblighi personali di natura dichiarativa in materia fiscale e solleva la Banca da qualsiasi responsabilit&agrave; al riguardo. L'intermediario non applicher&agrave; nessuna ritenuta sul Capital Gain, il Cliente sar&agrave; tenuto al regime ordinario di tassazione e quindi a dover ottemperare individualmente a tutti gli obblighi impositivi 
		 		 		 		 		 		 		 </td>
		 		 		 		 		 		 </tr>
		 		 		 		 		 		 </tbody>

		 		 		 		 		 </table>
		 		 		 		 		 <h1>2. SCEGLI IL TIPO DI COMMISSIONE</h1>
		 		 		 		 		 <table>
		 		 		 		 		 		 <tbody>
		 		 		 		 		 		 <tr>
		 		 		 		 		 		 		 <td>
		 		 		 		 		 		 		 		 <input type="radio" name="ng_commissioni" value="1" class="bgReset">
		 		 		 		 		 		 		 		 <strong>Profilo fisso</strong><br>

		 		 		 		 		 		 		 </td>
		 		 		 		 		 		 </tr>
		 		 		 		 		 		 <tr>
		 		 		 		 		 		 		 <td>
		 		 		 		 		 		 		 		 <input type="radio" name="ng_commissioni" value="0" class="bgReset">
		 		 		 		 		 		 		 		 <strong>Profilo variabile</strong><br>
		 		 		 		 		 		 		 </td>
		 		 		 		 		 		 </tr>

		 		 		 		 		 		 </tbody>
		 		 		 		 		 </table>
		 		 		 		 		 
		 		 		 		 		 <table width="100%" cellspacing="1" cellpadding="0" border="0" class="tabDetails">
		 		 		 		 		 <tr class="tabHead">
		 		 		 		 		 		 <td width="50%"></td>
		 		 		 		 		 		 <td width="25%" class="tabTesta" align="center">Profilo fisso*</td>
		 		 		 		 		 		 <td width="25%" class="tabTesta" align="center">Profilo variabile*</td>
		 		 		 		 		 </tr>

		 		 		 		 		 <tr class="sepRow">
		 		 		 		 		 		 <td colspan="3" style="text-align:left;"><strong>Mercati azionario</strong></td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Italia</td>
		 		 		 		 		 		 <td align="center">12 &euro;</td>
		 		 		 		 		 		 <td align="center">0,19% min 2,75 &euro; - max19,5 &euro;</td>

		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Europa</td>
		 		 		 		 		 		 <td align="center">20 &euro;</td>
		 		 		 		 		 		 <td align="center">20 &euro;</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>

		 		 		 		 		 		 <td>Regno Unito</td>
		 		 		 		 		 		 <td align="center">12,5 GBP</td>
		 		 		 		 		 		 <td align="center">12,5 GBP</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>America</td>
		 		 		 		 		 		 <td align="center">20 USD</td>

		 		 		 		 		 		 <td align="center">20 USD</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Sedex</td>
		 		 		 		 		 		 <td align="center">6 &euro;</td>
		 		 		 		 		 		 <td align="center">0,19% min 2,75 &euro; -  max19,5 &euro;</td>

		 		 		 		 		 </tr>
		 		 		 		 		 <tr class="sepRow">
		 		 		 		 		 		 <td colspan="3" style="text-align:left;"><strong>Mercati obbligazionario</strong></td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>EUROTLX, MOT, ExtraMOT, Akros IS, Obbligazioni OTC</td>
		 		 		 		 		 		 <td align="center">12 &euro;</td>

		 		 		 		 		 		 <td align="center">0,19% min 2,75 &euro; -  max19,5 &euro;</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr class="sepRow">
		 		 		 		 		 		 <td colspan="3" style="text-align:left;"><strong>Mercati dei derivati</strong></td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Italia (IDEM)</td>

		 		 		 		 		 		 <td align="center">10 &euro;</td>
		 		 		 		 		 		 <td align="center">10 &euro;</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Esteri (EUREX)</td>
		 		 		 		 		 		 <td align="center">9 &euro;</td>
		 		 		 		 		 		 <td align="center">9 &#36;</td>

		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Esteri (CME)</td>
		 		 		 		 		 		 <td align="center">6 &#36;</td>
		 		 		 		 		 		 <td align="center">6 &#36;</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>

		 		 		 		 		 		 <td>Esteri (eCBOT)</td>
		 		 		 		 		 		 <td align="center">12 &#36;</td>
		 		 		 		 		 		 <td align="center">12 &#36;</td>
		 		 		 		 		 </tr>
		 		 		 		 		 <tr>
		 		 		 		 		 		 <td>Esteri (LIF)</td>
		 		 		 		 		 		 <td align="center">7 GBP</td>

		 		 		 		 		 		 <td align="center">12 GBP</td>
		 		 		 		 		 </tr>
		 		 		 		 		 </table>

		 		 		 		 		 <p class="nota2">* salvo condizioni agevolate per convenzione</p>
		 		 		 		 		 
		 		 		 		 		 <h1>3. RICHIEDI IL SERVIZIO DI ESTRATTO CONTO E CONTABILI ONLINE</h1>
		 		 		 		 		 <table>
		 		 		 		 		 		 <tbody>

		 		 		 		 		 		 <tr>
		 		 		 		 		 		 		 <td colspan="2">
		 		 		 		 		 		 		 		 <input type="checkbox" name="colCT" value="1" checked="checked"> Questo servizio ti permette di vedere on line, e <strong>gratis</strong>, gli estratti conto e i documenti legati al deposito titoli,  nella sezione "Estratto c/c e contabili". Puoi salvarli nel tuo archivio personale sul sito di Webank oppure direttamente sul computer. 
		 		 		 		 		 		 		 		 Il servizio &egrave; <strong>pratico</strong>, perch&egrave; in qualunque momento consultabile e puntuale. Se scegli di non attivare il servizio online, ti ricordiamo che la spedizione dei documenti cartacei è a pagamento.<br><br>
		 		 		 		 		 		 		 </td>

		 		 		 		 		 		 </tr>
		 		 		 		 		 		 </tbody>
		 		 		 		 		 </table>
		 		 		 		 		 
		 		 		 		 </div>
		 		 		 		 <div class="footer"><img src="/img/ret/greyboxed_bottom_right.gif"></div>
		 		 		 </div>
		 		 </td>
		 </tr>
		 
		 		 
		 <!-- FINE CUSTODIA TITOLI -->

		 </tbody>
		 </table>
		 
</div>
</div>
</div>
</div>

</form>

<div id="buttonsOnLeft">
		 <div class="btnOut white"><a href="/webankpub/wb/2l/do/aol/wbwsPUaol1.do?BV_UseBVCookie=Yes&fromPageName=wsPUaol2.jsp&CNT_TARGET=Privati" title="Indietro">INDIETRO</a></div>
</div>

<div id="buttonsOnRight">
		 
		 <div class="btnOut">
		 		 <a href="javascript:openAlert('salvaInBozza');" title="Salva bozza">
		 		 		 SALVA BOZZA
		 		 </a>
		 </div>
		 
		 
		 <div class="btnOut"><a href="javascript:servizi(1,5, true);" title="Avanti">AVANTI</a></div>
</div>		 


		 <script type="text/javascript">
		 if(document.aol.ct.checked){
		 		 visualizzaDiv('divCustodia', document.aol.ct);		 
		 }
		 </script>












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




<!-- INIZIO CODICE ALERT BOX 75-->
<div class="layeralert2" id="layerTassazioneDividendi" style="display:none;">
<div class="head"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closeAlert('layerTassazioneDividendi');"></div>
		 <div class="body">
		 		 		 <div class="important">
		 		 		 		 <div class="sx"><img src="/img/ret/img_or_evtxt2.gif" /></div>
		 		 		 		 <div class="dx">
		 		 		 		 		 <p>
		 		 		 		 		 		 Puoi scegliere il regime del risparmio amministrato solo se le azioni depositate <strong>non sono relative all'attività di impresa e non rappresentano una partecipazione qualificata</strong>. I dividendi che derivano da queste azioni sono sottoposti al prelievo fiscale previsto dagli articoli 27 (comma 1.4) e 27ter del DPR n.600 del 29/9/73, modificato dal decreto legislativo 344/03. La ritenuta applicata ai dividendi di queste azioni è del 12,5%.
		 		 		 		 		 		 Se sei titolare di partecipazioni qualificate <strong>devi scegliere il regime ordinario e inserire i dividendi nella tua dichiarazione dei redditi</strong>. 
		 		 		         </p>

		 		 		 		 </div>		 
		 		 		 </div>
		 		 		 <br class="clear">
		 		 		 <div class="fooform">
		 		 		 		 <a title="Lorem ipsum" class="btnformright" href="javascript: closeAlert('layerTassazioneDividendi');"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
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
		 		 
		 		 		 		 <li><a href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_trasparenza_nw&OBS_KEY=pro_wbn_trasparenza" title="Trasparenza">Trasparenza</a></li>
		 
		 		 		 		 		 <li class="separator">|</li>
		 		 		 
		 		 		 		 <li><a href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_privacy_nw&OBS_KEY=pro_wbn_privacy" title="Privacy">Privacy</a></li>
		 
		 		 		 		 		 <li class="separator">|</li>

		 		 		 
		 		 		 		 <li><a href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_sicurezza_nw&OBS_KEY=pro_wbn_sicurezza" title="Sicurezza">Sicurezza</a></li>
		 
		 		 		 		 		 <li class="separator">|</li>
		 		 		 
		 		 		 		 <li><a href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_partnership_nw&OBS_KEY=pro_wbn_partnership" title="I nostri partner">I nostri partner</a></li>
		 
		 		 		 		 		 <li class="separator">|</li>
		 		 		 
		 		 		 		 <li><a href="/webankpub/wb/schedaContattiStampa.do?tabId=nav_pub_wb_newsroom_nw&OBS_KEY=pro_wbn_newsroom&KEY4=pro4_contatti_stampa" title="Press room">Press room</a></li>
		 
		 		 		 		 		 <li class="separator">|</li>

		 		 		 
		 		 		 		 <li><a href="/webankpub/wb/fpSocial.do?tabId=nav_pub_wb_newsroom_nw&OBS_KEY=pro_wbn_newsroom" title="Social &amp; Multimedia">Social &amp; Multimedia</a></li>
		 
		 		 		 		 		 <li class="separator">|</li>
		 		 		 
		 		 		 		 <li><a href="/webankpub/wb/PartecipaHome.do?tabId=nav_pub_wb_partecipa_nw&OBS_KEY=pro_wbn_partecipa" title="La banca che vorrei">La banca che vorrei</a></li>
		 
		 </ul>


		 
		 
		 <!-- AddThis Button BEGIN -->

		 <div class="linksocialnet">
		 		 <a target="_blank" title="Seguici su YouTube" href="http://www.youtube.com/webanktv"><img src="/img/ico1gr_sendyoutube.gif" alt="Seguici su YouTube"></a>
		 		 <a target="_blank" title="Seguici su friendfeed" href="http://www.friendfeed.com/webank"><img src="/img/ico1gr_sendfriendfeed.gif" alt="Seguici su friendfeed"></a>
		 		 <a target="_blank" title="Seguici su twitter" href="http://www.twitter.com/webank"><img src="/img/ico1gr_sendtwitter.gif" alt="Seguici su twitter"></a>
		 		 <a target="_blank" title="Seguici su Facebook" href="http://www.facebook.com/WebankOnlineDal1999"><img src="/img/ico1gr_sendfacebook.gif" alt="Seguici su Facebook"></a>
		 </div>
		 

		 <!-- CONDIVIDI-->
		 <div class="condividi" id="condividiID">
		 		 		 <a href="javascript:;" onclick="openShareTool(6,32)" class="condividibtn"><img src="/img/btn_condividi.gif" alt="Condividi" style="border:0" /></a>

		 		 		 <div class="condividiTools" id="condividiTool" style="display:none;">
		 		 		 		 
		 		 		 		 
		 		 		 		 		 <div class="iconcondividicontainer">
		 		 		 		 		 		 <div class="iconcondividileft"></div>
		 		 		 		 		 		 <div class="iconcondividimiddle">
		 		 		 		 		 		 		 <div class="textcondividi">
		 		 		 		 		 		 		 		 <a href="javascript:;" class="closeCondividi" onclick="openShareTool(6,32)"><img alt="" src="/img/ico1gr_condividi_close.gif"></a>
		 		 		 		 		 		 		 		 <span>Condividi questa pagina.. </span><br class="clear"/>
		 		 		 		 		 		 		 </div>

		 		 		 		 		 		 		 <div class="iconcondividicont">
		 		 		 		 		 		 		 		 <a id="cond_fb" target="_blank" title="Segnala su Facebook" href="#"><img alt="Segnala su Facebook" src="/img/ico1gr_facebook_cond.gif"></a>
		 		 		 		 		 		 		 		 <a id="cond_digg" target="_blank" title="Segnala su Digg" href="#"><img alt="Segnala su Digg" src="/img/ico1gr_digg_cond.gif"></a>
		 		 		 		 		 		 		 		 <a id="cond_del" target="_blank" title="Segnala su Del.icio.us" href=""><img alt="Segnala su Del.icio.us" src="/img/ico1gr_delic_cond.gif"></a>
		 		 		 		 		 		 		 		 <a id="cond_tw" target="_blank" title="Segnala su Twitter" href="#"><img alt="" src="/img/ico1gr_twitter_cond.gif"></a>
		 		 		 		 		 		 		 		 <a id="cond_ok" target="_blank" title="Segnala su OKNOtizie" href="#"><img alt="Segnala su OKNOtizie" src="/img/ico1gr_ok_cond.gif"></a>
		 		 		 		 		 		 		 		 <a id="cond_mail" target="_blank" title="" href="#" class="last"><img alt="Segnala con mail" src="/img/ico1gr_mail_cond.gif"></a>
		 		 		 		 		 		 		 </div>
		 		 		 		 		 		 </div>

		 		 		 		 		 		 <div class="iconcondividiright"></div>
		 		 		 		 		 </div>
		 		 		 </div>
		 </div>
		 
		 <!-- FINE CONDIVIDI-->
		 <!-- FB LIKE -->
		 <div id="fbLike"><img src="/img/fbloading.gif" alt="Caricamento..."></div>
		 <script type="text/javascript">loadFBLike();</script>

		 <!-- / FB LIKE -->
		 
		 <br class="clear" />

		 <p>&copy; 2009 Webank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
</div>
<!-- FINE FOOTER -->


		 		 </div>
		 
</div>


</body>
		 
		 		 <script type="text/javascript">
		 		 		 document.cookie = 'ultimeTrePagine='+'*!*!*!*:nav_pub_wb_home_nw!nav_pub_wb_home_nw!*!*:*!pro_wbn_apri_conto_webank!*!*';
		 		 		 var srvTs = '1302190206762'; 
		 		 
		 		 		 var hp_visual = 'null';
		 
		 		 </script>
		 		 
		 		 

</html>
