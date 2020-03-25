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



<div id="content" class="expanded" style="height:auto">
<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

		<!-- INIZIO CODICE--> 
 <div class="box72"><div class="sx">
<h1>Lorem ipsum stet harum sanctus eum ut</h1>
<p>Nullam tortor. Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis, massa mi sodales lorem, quis aliquet nunc nibh vitae mauris. Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra. Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p class="nota">Fusce nisi. Phasellus accumsan est in lorem <b>123 456 789</b></p>
</div>
<div class="help">
<p class="tit">HELP</p>
<p>se hai bisogno d'aiuto<br />
contatta il nostro Help Desk</p>
<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif" /><span>Lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
<br class="clear" />
</div>
<br class="clear" />
</div>

<br /><!-- FINE CODICE--> 
<!-- INIZIO CODICE--> 
 <br class="clear" />
<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont">

<br>
<div class="aolListaBozze">
	<!--div class="bozzaPromo bozzaPromoBorder">
		<span class="listacentro" href="#">Pratica salvata il xx/xx/xxxx:</span><br class="clear"><br>
		<h3>Per te 120 &euro; di buoni acquisto. Ecco i tre semplici passi per ottenerli:</h3>
		<ul class="stepPromo">
			<li><strong>Scegli il premio</strong> tra eBay, TotalErg e Unieuro e <strong>Richiedi Conto Webank entro il 15 aprile 2015</strong> cliccando sul corrispettivo bottone &quot;APRI IL CONTO&quot;</li>
			<li><strong>Perfeziona</strong> l'apertura del Conto Webank <strong>entro il 15 maggio 2015:</strong> stampa ed inviaci tutta la documentazione firmata</li>
			<li><strong>Attiva una linea deposito a 12 mesi</strong> senza facolt&agrave; di svincolo anticipato con almeno 1000&euro; <strong>entro il 31 maggio 2015</strong> OPPURE a tua scelta <strong>IN ALTERNATIVA entro il 30 giugno 2015</strong> accredita lo stipendio/pensione OPPURE domicila un'utenza: Riceverai alla mail indicata il buono acquisto che hai scelto</li>
		</ul>
		<br class="clear">
		<div class="promozione">
			<span class="box">
				<a href="#" title="Ebay - Apri il tuo conto"><img src="/img/ebay_logo_tracking.gif"/></a><span class="oppure">oppure</span>
				<a href="#" title="TotalErg - Apri il tuo conto"><img src="/img/totalerg_logo_tracking.gif"/></a><span class="oppure">oppure</span>
				<a href="#" title="Unieuro - Apri il tuo conto"><img src="/img/unieuro_logo_tracking.gif"/></a>
			</span>
		</div>
	<br class="clear">
	<p>Per maggiori informazioni leggi il regolamento:</p>
	
	<textarea style="width:100%; height:100px" class="" name="textarea" readonly="readonly">REGOLAMENTO OPERAZIONE A PREMI denominata &quot;CONTO WEBANK TI REGALA 120&euro; DI BUONI ACQUISTO EBAY o TOTALERG! o UNIEURO!&quot;
SOGGETTO PROMOTORE: Banca Popolare di Milano S.c.a.r.l
Piazza Meda 4 - 20121 Milano
CF e PI: 00715120150
AMBITO TERRITORIALE: Territorio Nazionale
DURATA DELLA MANIFESTAZIONE:Dal 13 Febbraio 2015 al 31 Maggio 2015
PRODOTTO PROMOZIONATO:Conto Webank
DESTINATARI DEI PREMI:Soggetti residenti sul territorio nazionale di et&agrave; uguale o superiore a 18 anni.
Non potranno beneficiare di questa iniziativa:
- coloro che alla data di partenza della presente operazione a premi risultano gi&agrave; clienti del Gruppo Banca Popolare di Milano . Per gi&agrave; cliente del Gruppo Banca Popolare di Milano  si intende il titolare di un conto corrente presso una della banche del Gruppo Banca Popolare di Milano  (Banca Popolare di Milano, Banca Popolare di Mantova). Nel caso di conto cointestato, nessuno dei cointestatari dovr&agrave; essere gi&agrave; Cliente del Gruppo Banca Popolare di Milano;
- coloro che hanno chiuso un conto in essere presso una delle banche del Gruppo Banca Popolare di Milano  avendo gi&agrave; partecipato ad una precedente operazione a premi della Banca Popolare di Milano;
- coloro che hanno chiuso un Conto Webank aperto in regime di convenzione (a titolo esemplificativo: ZurichConnect, MediaWorld) dal 01/04/2010; 
- i lavoratori dipendenti e promotori finanziari del Gruppo Banca Popolare di Milano; 
- coloro ai quali verr&agrave; rifiutata la domanda di apertura del Conto Webank per mancanza dei requisiti richiesti dalla banca ovvero del rispetto delle disposizioni normative vigenti in materia.

MODALIT&Agrave; DI SVOLGIMENTO DELLA MANIFESTAZIONE:
Tutti coloro che 
1) tra il 13 febbraio 2015 e il 15 Aprile 2015 richiederanno l'apertura di un &quot;Conto Webank&quot;, accedendo alla richiesta di apertura dalla pagina http://www.webank.it/promo E
2) entro il 10 maggio 2015 perfezioneranno l'apertura del conto ED entro il 31 maggio 2015  attiveranno una linea a 12 mesi non svincolabile fino a scadenza con almeno 1.000,00 &euro;
OPPURE 
entro il 30 giugno 2015 domicilieranno un utenza OPPURE accrediteranno lo stipendio o la pensione,
riceveranno, contestualmente al verificarsi di tutte le condizioni di cui sopra, un Premio a scelta fra:

- n&deg; 1 Buono Acquisto PayPal spendibile sul Sito www.ebay.it del valore di 120,00&euro;;
	
OPPURE

- n&deg; 12 Buoni Carburante Web TotalErg del valore di &euro; 10,00 cad spendibili per rifornimenti nei Punti vendita TotalErg. 

OPPURE

- n&deg; 1 Buono Acquisto Unieuro spendibile sul Sito www.unieuro.it del valore di 120,00&euro; 

La scelta del premio dovr&agrave; essere effettuata prima di procedere con la richiesta di apertura conto direttamente dalla pagina http://www.webank.it/promo e non potr&agrave; essere modificata.

Il premio scelto verr&agrave; spedito all'indirizzo e-mail inserito dal cliente e memorizzato nella sezione &quot;dati e impostazioni personali&quot; della parte privata del sito www.webank.it.

Per apertura di Conto Webank si intende la conclusione del contratto ai sensi dell'art.97 Conclusione ed efficacia del contratto della Sezione V &quot;Norme generali che regolano il servizio WeBank&quot; contenuta nella &quot;Condizioni generali di Contratto del Conto Corrente e dei Servizi Associati – Servizio Webank&quot;.	

L'accredito dello stipendio o della pensione dovr&agrave; avvenire con l'inserimento di una causale (Es. Emolumenti, Abi 27 ecc.) che permetta alla Banca di riconoscere la natura dell'accredito, ossia che trattasi di stipendio o pensione. Resta inteso che la Banca si riserva la facolt&agrave; di effettuare le verifiche del caso.

L'iniziativa non &egrave; cumulabile con altre operazioni a premio o convenzioni della Banca e pertanto non sar&agrave; possibile inserire alcun codice convenzione al momento dell'apertura di Conto Webank.

Nel caso in cui il &quot;Conto Webank&quot; attivato dal Cliente sia cointestato, sar&agrave; erogato sempre un solo Premio.

Il buono acquisto PayPal saragrave; spendibile sul sito di Ebay (http://www.Ebay.it) entro dieci mesi dalla data di consegna. 

Per utilizzare il &quot;Buono acquisto&quot; PayPal &egrave; sufficiente scegliere i prodotti desiderati fra quelli disponibili sul sito eBay, arrivare alla schermata degli strumenti di pagamento, inserire il codice &quot;Buono acquisto&quot; ed effettuare il pagamento mediante PayPal. Il Buono acquisto deve essere utilizzato in un'unica soluzione. Un eventuale utilizzo parziale non dar&agrave; diritto al rimborso dell'importo non utilizzato. L'utilizzo del Buono acquisto è soggetto ai termini e condizioni pubblicati alla pagina http://pages.ebay.it/buono_sconto/ 

I Buoni Carburante Web TotalErg saranno spendibili per rifornimenti nei Punti vendita TotalErg abilitati e in presenza del Gestore entro 5 mesi dalla data di consegna. L’elenco dei punti vendita TotalErg presso i quali sar&agrave; possibile utilizzare i Buoni Carburante Web e le relative istruzioni per l'utilizzo sono disponibili sul sito www.totalerg.it. Gli stessi dovranno essere stampati e consegnati al Gestore del Punto Vendita TotalErg per l'utilizzo al momento del rifornimento. 

Il buono acquisto Unieuro sar&agrave; spendibile sul sito di Unieuro (http://www.unieuro.it) entro dieci mesi dalla data di consegna. 

Per utilizzare il &quot;Coupon Sconto&quot; Unieuro &egrave; sufficiente scegliere i prodotti desiderati sul sito, arrivare nella pagina della cassa, inserire il codice &quot;Coupon Sconto&quot; per ottenere lo sconto. Qualora l’ammontare complessivo della transazione, comprensiva di spese di spedizione, dovesse avere un valore superiore a quello del Coupon, sar&agrave; necessario integrare la differenza utilizzando altri strumenti di pagamento. L'utilizzo parziale del Buono non dar&agrave; diritto a spendere l’ammontare del valore residuo nelle transazioni successive

	
NATURA E VALORE DEI SINGOLI PREMI MESSI IN PALIO: 
- n&deg; 1 Buono acquisto PayPal spendibile sul sito www.ebay.it, usufruibile entro dieci mesi dalla data di consegna, del valore di &euro; 120,00 IVA inclusa.	

- n&deg; 1 Buono acquisto Unieuro spendibile sul sito www.unieuro.it, usufruibile entro dieci mesi dalla data di consegna, del valore di &euro; 120,00 IVA inclusa.

- n&deg; 12 Buoni Carburante Web TotalErg del valore di &euro; 10,00 cad. spendibili per rifornimenti nei Punti vendita TotalErg abilitati ed in presenza del Gestore entro 5 mesi dalla data di consegna.

MONTEPREMI NETTO:
Si presume di distribuire:
- n&deg; 500 Buoni acquisto Unieuro spendibili sul sito www.unieuro.it, usufruibili entro dieci mesi dalla data di consegna, del valore di &euro; 120,00 cad IVA inclusa.
	


- n&deg; 500 Buoni acquisto PayPal spendibili sul sito www.ebay.it, usufruibili entro dieci mesi dalla data di consegna, del valore di &euro; 120,00 cad IVA inclusa.


- n&deg; 12.000 &quot;Buoni Carburante Web TotalErg del valore di &euro; 10,00 cad spendibili per rifornimenti nei Punti vendita TotalErg abilitati ed in presenza del Gestore entro 5 mesi dalla data di consegna.

	
Totale montepremi: Euro 240.000,00 IVA inclusa

Banca Popolare di Milano ASSICURA in ogni caso l'assegnazione del premio A TUTTI i partecipanti all'operazione a premi che soddisferanno le condizioni di cui sopra, anche se risulteranno in numero superiore rispetto a quanto stimato al momento dell'avvio dell'operazione

PUBBLICIT&Agrave;:
Attraverso le pagine http://www.webank.it/promo.html, https://www.webank.it/lndpage/promo2015.html
, https://www.webank.it/lndpage/promo2015m.html, nonché mediante banner, TV, e-mail pubblicitarie e comunicazione sul sito www.webank.it.

MEZZI E MODALIT&Agrave; DI CONSULTAZIONE DEL REGOLAMENTO:
Il regolamento completo sar&agrave; a disposizione degli utenti finali alla pagina 
www.webank.it/promo. Ulteriori informazioni sull’iniziativa potranno essere richieste contattando il nr verde WeBank 800 148 149 oppure scrivendo all’indirizzo e-mail webank@webank.it. 

TRATTAMENTO DEI DATI:
La societ&agrave; dichiara che la partecipazione alla presente operazione a premi presuppone il trattamento dei dati personali dei partecipanti nel rispetto del Decreto Legislativo del 30/06/2003 n°196 &quot;Codice in materia di protezione dei dati personali” e successive modifiche, così come dettagliato e specificato dall'informativa ai sensi dell’art. 13 di detto Decreto, che verr&agrave; resa ai partecipanti all’operazione a premi in fase di apertura del &quot;Conto Webank”.

VARIE:
Il cliente che non potesse o volesse usufruire del premio non avr&agrave; diritto ad alcuna somma di denaro.
Il premio non può essere convertito n&eacute; in denaro né in gettoni d'oro.

La Societ&agrave; promotrice non si assume alcuna responsabilit&agrave;:
- per cause a lei non imputabili (es. sovraccarico di rete, assenza di rete…) che comportino   l'impossibilit&agrave; ad accedere al sito per la compilazione della richiesta di apertura;
- per caselle di posta elettronica piene che non consentono pertanto la ricezione di  mail inviate da Banca Popolare di Milano;
- per indirizzi e-mail errati o incompleti indicati dal Cliente in fase di apertura del Conto;
- per mancata risposta dall’host computer dopo l’invio di  mail da parte di Banca Popolare di Milano;
- per e-mail indicate in fase di apertura del Conto inserite in black-list.

I Clienti sono quindi invitati a controllare la propria casella di posta elettronica (anche tra le spam).

Nell'eventualit&agrave; in cui, per impossibilit&agrave; sopravvenuta o per causa non imputabile al soggetto promotore, il premio spettante non sia disponibile, Banca Popolare di Milano S.c.a.r.l metter&agrave; a disposizione un premio della stessa natura e di medesimo valore.

La Banca si riserva la facolt&agrave; di verificare tutti i requisiti per l'esigibilit&agrave; e consegna del premio anche in un momento successivo all’apertura del conto corrente da parte del cliente.

Nell’eventualit&agrave; in cui, per impossibilit&agrave; sopravvenuta o per causa non imputabile al soggetto promotore, il premio spettante non sia disponibile, Banca Popolare di Milano S.c.a.r.l metter&agrave; a disposizione un premio della stessa natura e di medesimo valore.

Il premio non potr&agrave; essere riconosciuto ai destinatari della promozione, nel caso in cui il cliente non sia in regola con le norme relative alla tenuta conto (insolvenza, morosit&agrave;, ecc.). 



	
	
	</textarea>
	<p>E in aggiunta, hai i <strong>bolli gratuiti</strong> sul conto corrente per 6 mesi.</p>
	</div>
	
	<br class="clear"></br-->
	<div class="bozzaPromo bozzaPromoBorder">
		<span class="listacentro" href="#">Pratica salvata il xx/xx/xxxx:</span><br class="clear"><br>
		<h3>Per te 120 &euro; di buoni acquisto. Ecco i tre semplici passi per ottenerli:</h3>
		<ul class="stepPromo">
			<li><strong>Scegli il premio</strong> tra eBay, TotalErg e Unieuro e <strong>Richiedi Conto Webank entro il 15 aprile 2015</strong> cliccando sul corrispettivo bottone &quot;APRI IL CONTO&quot;</li>
			<li><strong>Perfeziona</strong> l'apertura del Conto Webank <strong>entro il 15 maggio 2015:</strong> stampa ed inviaci tutta la documentazione firmata</li>
			<li><strong>Attiva una linea deposito a 12 mesi</strong> senza facolt&agrave; di svincolo anticipato con almeno 1000&euro; <strong>entro il 31 maggio 2015</strong> OPPURE a tua scelta <strong>IN ALTERNATIVA entro il 30 giugno 2015</strong> accredita lo stipendio/pensione OPPURE domicila un'utenza: Riceverai alla mail indicata il buono acquisto che hai scelto</li>
		</ul>
		<br class="clear">
		<div class="promozione">
			<span class="box">
				<a href="#" title="Ebay - Apri il tuo conto"><img src="/img/ebay_logo_tracking.gif"/></a><span class="oppure">oppure</span>
				<a href="#" title="TotalErg - Apri il tuo conto"><img src="/img/totalerg_logo_tracking.gif"/></a><span class="oppure">oppure</span>
				<a href="#" title="Unieuro - Apri il tuo conto"><img src="/img/unieuro_logo_tracking.gif"/></a>
			</span>
		</div>
	<br class="clear"><br>
	<div class="regolamento">
		<a class="regolamento" href="">Leggi il regolamento dell'iniziativa promozionale</a>
	</div>
	<br>
	<p>E in aggiunta, hai i <strong>bolli gratuiti</strong> sul conto corrente per 6 mesi.</p>
	</div>
	<br>
	<div class="bozzaPromoBorder"><a class="linkBozzaStandard" href="#">Richiesta del xx/xx/xxxx</a><br></div><br>
	<div class="bozzaPromoBorder"><a class="linkBozzaStandard" href="#">Richiesta del xx/xx/xxxx</a><br></div><br>
</div>



</div>
</div>


</div>
<br /><!-- FINE CODICE--> 
<!-- INIZIO CODICE--> 
 <br class="clear" />

<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont">
<br>
<div class="aolListaBozze">
	<div class="bozzaPromo bozzaPromoBorder">
		<span class="listacentro" href="#">Bozza con promozione</span><br class="clear"><br>
		<h3>Ecco i tre semplici passi per regalarti 120 &euro;</h3>
		<ul class="stepPromo">
			<li><strong>Scegli il premio</strong> tra eBay, TotalErg e Unieuro e <strong>Richiedi Conto Webank entro il 15 aprile 2015</strong> cliccando sul corrispettivo bottone &quot;APRI IL CONTO&quot;</li>
			<li><strong>Perfeziona</strong> l'apertura del Conto Webank <strong>entro il 15 maggio 2015:</strong> stampa ed inviaci tutta la documentazione firmata o porta tutto alla filiale BPM pi&ugrave vicina</li>
			<li><strong>Attiva una linea deposito a 12 mesi</strong> senza facolt&agrave; di svincolo anticipato con almeno 1000&euro; <strong>entro il 31 maggio 2015</strong> OPPURE a tua scelta <strong>IN ALTERNATIVA entro il 30 giugno 2015</strong> accredita lo stipendio/pensione OPPURE domicila un'utenza: Riceverai alla mail indicata il buono acquisto che hai scelto del valore di <strong>120&euro;</strong></li>
		</ul>
		<br class="clear">
		<div class="promozione">
			<span class="box">
				<h2>120 &euro; di buoni acquisto su:</h2>
				<a href="#" title="Ebay - Apri il tuo conto"><img src="/img/ebay_logo_tracking.gif"/></a><span class="oppure">oppure</span>
				<a href="#" title="TotalErg - Apri il tuo conto"><img src="/img/totalerg_logo_tracking.gif"/></a><span class="oppure">oppure</span>
				<a href="#" title="Unieuro - Apri il tuo conto"><img src="/img/unieuro_logo_tracking.gif"/></a>
			</span>
		</div>
	<br class="clear"><br>
	<div class="regolamento">
		<a class="regolamento" href="">Leggi il regolamento dell'iniziativa promozionale</a>
	</div>
	<p>E In aggiunta, <strong>gratuit&agrave; dei bolli</strong> sul conto corrente dall'apertura e per 6 mesi.</p>
	</div><br><br>
	<div class="bozzaPromo bozzaPromoBorder">
		<span class="listacentro" href="#">Bozza con promozione</span><br class="clear"><br>
		<h3>Ecco i tre semplici passi per regalarti 120 &euro;</h3>
		<ul class="stepPromo">
			<li><strong>Scegli il premio</strong> tra eBay, TotalErg e Unieuro e <strong>Richiedi Conto Webank entro il 15 aprile 2015</strong> cliccando sul corrispettivo bottone &quot;APRI IL CONTO&quot;</li>
			<li><strong>Perfeziona</strong> l'apertura del Conto Webank <strong>entro il 15 maggio 2015:</strong> stampa ed inviaci tutta la documentazione firmata o porta tutto alla filiale BPM pi&ugrave vicina</li>
			<li><strong>Attiva una linea deposito a 12 mesi</strong> senza facolt&agrave; di svincolo anticipato con almeno 1000&euro; <strong>entro il 31 maggio 2015</strong> OPPURE a tua scelta <strong>IN ALTERNATIVA entro il 30 giugno 2015</strong> accredita lo stipendio/pensione OPPURE domicila un'utenza: Riceverai alla mail indicata il buono acquisto che hai scelto del valore di <strong>120&euro;</strong></li>
		</ul>
		<br class="clear">
		<div class="promozione">
			<span class="box">
				<h2>120 &euro; di buoni acquisto su:</h2>
				<a href="#" title="Ebay - Apri il tuo conto"><img src="/img/ebay_logo_tracking.gif"/></a>
				<a href="#" title="TotalErg - Apri il tuo conto"><img src="/img/totalerg_logo_tracking.gif"/></a>
				<a href="#" title="Unieuro - Apri il tuo conto"><img src="/img/unieuro_logo_tracking.gif"/></a>
			</span>
		</div>
	<br class="clear"><br>
	<div class="regolamento">
		<a class="regolamento" href="">Leggi il regolamento dell'iniziativa promozionale</a>
	</div>
	<p>E In aggiunta, <strong>gratuit&agrave; dei bolli</strong> sul conto corrente dall'apertura e per 6 mesi.</p>
	</div><br><br>
	<div class="bozzaPromo bozzaPromoBorder">
		<span class="listacentro" href="#">Bozza con promozione</span><br class="clear"><br>
		<h3>Ecco i tre semplici passi per regalarti 120 &euro;</h3>
		<ul class="stepPromo">
			<li><strong>Scegli il premio</strong> tra eBay, TotalErg e Unieuro e <strong>Richiedi Conto Webank entro il 15 aprile 2015</strong> cliccando sul corrispettivo bottone &quot;APRI IL CONTO&quot;</li>
			<li><strong>Perfeziona</strong> l'apertura del Conto Webank <strong>entro il 15 maggio 2015:</strong> stampa ed inviaci tutta la documentazione firmata o porta tutto alla filiale BPM pi&ugrave vicina</li>
			<li><strong>Attiva una linea deposito a 12 mesi</strong> senza facolt&agrave; di svincolo anticipato con almeno 1000&euro; <strong>entro il 31 maggio 2015</strong> OPPURE a tua scelta <strong>IN ALTERNATIVA entro il 30 giugno 2015</strong> accredita lo stipendio/pensione OPPURE domicila un'utenza: Riceverai alla mail indicata il buono acquisto che hai scelto del valore di <strong>120&euro;</strong></li>
		</ul>
		<br class="clear">
		<div class="promozione">
			<span class="box">
				<h2>120 &euro; di buoni acquisto su:</h2>
				<a href="#" title="Ebay - Apri il tuo conto"><img src="/img/ebay_logo_tracking.gif"/></a>
				<a href="#" title="TotalErg - Apri il tuo conto"><img src="/img/totalerg_logo_tracking.gif"/></a>
				<a href="#" title="Unieuro - Apri il tuo conto"><img src="/img/unieuro_logo_tracking.gif"/></a>
			</span>
		</div>
	<br class="clear"><br>
	<div class="regolamento">
		<a class="regolamento" href="">Leggi il regolamento dell'iniziativa promozionale</a>
	</div>
	<p>E In aggiunta, <strong>gratuit&agrave; dei bolli</strong> sul conto corrente dall'apertura e per 6 mesi.</p>
	</div>
	<br class="clear"></br></br>
	
	<div class="bozzaPromoBorder"><a class="linkBozzaStandard" href="#">Bozza senza promozione</a><br></div><br class="clear">
	<div class="bozzaPromoBorder"><a class="linkBozzaStandard" href="#">Bozza senza promozione</a><br></div><br class="clear">
</div>
<!--<div class="b">



<div class="step">
		<span>1</span> Lorem ipsum
	</div>   
    <div class="onStep step">

		<span>2</span> Lorem ipsum
	</div>  
    <div class="step last">

		<span>3</span> Lorem ipsumLorem ipsum
	</div>	
	<br class="clear" />
</div>
<p class="notab">Phasellus accumsan est in lorem <a href="#">qui</a></p>
<br class="clear" />
<p><b class="titgrande">LOREM:</b><br />
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br />
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br />

<b>IPSUM:</b><br />
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br />
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br />
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>
<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>

</ul>-->
<!--<br />
<input type="checkbox" class="nobor" value="radiobutton" name="radiobutton"/>Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet
<br class="clear" />-->


</div>
</div>


</div>
<br /><!-- FINE CODICE--> 
<!-- INIZIO CODICE--> 
 <br class="clear" />
<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont">
<div class="b">
<div class="step">
		<span>1</span> Lorem ipsum
	</div>   
    <div class="onStep step">

		<span>2</span> Lorem ipsum
	</div>  
    <div class="step last">
		<span>3</span> Lorem ipsumLorem ipsum
	</div>	
	<br class="clear" />
</div>
<p class="notab">Phasellus accumsan est in lorem <a href="#">qui</a></p>

<br class="clear" />
<p><b class="titgrande">LOREM:</b><br />
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br />
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br />
<b>IPSUM:</b><br />
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br />
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br />
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
</ul>
<br />
<input type="checkbox" class="nobor" value="radiobutton" name="radiobutton"/>Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet
<br class="clear" />
<div class="fooform fooformAcc">
			<div class="fooformright">
				<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>

		<br class="clear"/>
			</div>	
		<br class="clear"/>
		</div>
</div>
</div>


</div>
<br /><!-- FINE CODICE--> 
<!-- INIZIO CODICE--> 
 <br class="clear" />
<div class="box73">

<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Pratica del xx/xx/xxxx xx.xx</h2><img src="/img/ret/ico1gr_aol_acc_closed.gif"/><br class="clear" /></div><div class="cont">
<div class="b">
<div class="step">
		<span>1</span> Lorem ipsum
	</div>   
    <div class="onStep step">

		<span>2</span> Lorem ipsum
	</div>  
    <div class="step last">

		<span>3</span> Lorem ipsumLorem ipsum
	</div>	
	<br class="clear" />
</div>
<p class="notab">Phasellus accumsan est in lorem <a href="#">qui</a></p>
<br class="clear" />
<p><b class="titgrande">LOREM:</b><br />
Aenean vitae eros et mi placerat elementum. Nulla tincidunt, lectus ac pulvinar sagittis.<br />
Massa mi sodales lorem, quis aliquet nunc nibh vitae mauris.<br />

<b>IPSUM:</b><br />
Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br />
Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>

<p>Lorem: Fusce nisi. Phasellus accumsan est in lorem. Fusce viverra.<br />
Lorem: Ut urna justo, dignissim a, auctor id, volutpat sit amet, sem. Etiam eget est in orci rhoncus ullamcorper.</p>
<ul>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>
<li><a href="#">Lorem ipsum lorem ipsum lorem ipsum lorem</a></li>

</ul>
<br />
<input type="checkbox" class="nobor" value="radiobutton" name="radiobutton"/>Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet
<br class="clear" />
<div class="fooform fooformAcc">
			<div class="fooformright">
				<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		<br class="clear"/>
			</div>	
		<br class="clear"/>
		</div>

</div>
</div>


</div>
<br /><!-- FINE CODICE--> 
		</div>
<!-- FOOTER -->
<div id="footer">
	<ul>		
		<li>&nbsp;</li>
	</ul>

	<p>© 2009 Webank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
</div>
<!-- FINE FOOTER -->


		</div>
</div>
</body> 

</html>
