<body style="zoom:1">
<div class="wrapper">
	<div class="header">
		









	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	







	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css">


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css">
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css">

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css">

<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161229">
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161229">
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161229">
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161229">






	<link media="print" rel="stylesheet" type="text/css" href="/HT/CSS/print.css">


<!--[if IE 8]>
<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
<![endif]-->


	
	<title>headerF24</title>
	
	

<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-migrate-1.0.0.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.ui.touch-punch.min.js"></script>

	<script type="text/javascript" language="javascript" src="/HT/JS/script/ie10-viewport.js"></script> 

<script type="text/javascript" language="javascript" src="/HT/JS/script/jsapi.js"></script>


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.dateIT.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.altImg.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.formattedNum.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.natural.js"></script>


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.form.js"></script>





<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.blockUI.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
 
 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/html5.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/respond.min.js"></script>
<![endif]-->


<script type="text/javascript" language="javascript" src="/HT/JS/script/funzioniYW.js?v=161229"></script>






<script>


$(document).ready(function(e) {
	var resizeTimer;
	var servVal = false;
	$(window).resize(function () {
		if ( servVal != isMobile() && location.href.search('login') ==-1) {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
				
				$.post(getPathContext()+'/common/refreshBreakpoint.do', { device: getBreakpoint()}, function(response, status) { 
					servVal = isMobile();
				});
			}, 500);
		}
	});
});
</script>

<script type="text/javascript">
function getPathImages() { return "/HT/IMAGES/";}
function getPathContext() {	return "/WEBHT";}
function getKBanca() {	return "1";}
function getLineaTol() {	return "";}
</script>


	<script type="text/javascript">
		function printContent() {
            var fr1 = parent['frF24Center'];
   	        var fr2 = fr1.frames[0];
   	        var fr3 = fr2.frames[0];
   	       	if (fr3.name != "footerFrame") {
   	       		fr3.focus();
				fr3.print();
   	       	} else {
   	       		fr2.focus();
				fr2.print();
   	       	}
		}
	</script>
	

	<div class="wrapper">
		<div class="header" style="box-shadow: none;">
			<div class="topbar">
				<div class="container">
					
					<div>
					
						<div class="buttons">
							<div class="ico logout pull-right">
								<a href="#" id="frmLogout" class="" title="Esci" onclick="javascript:top.window.close(); return false;"> </a>
							</div>
							<div class="ico print pull-right">
								<a onclick="javascript:printContent(); return false;" title="Stampa" href="#"></a>
							</div>
						</div>

							<div class="ico user-info pull-right">
								<div><strong>Fabrizio Domanin</strong></div>
				         	
							<span>Ultimo accesso:</span>
							<strong>
								16/03/2017			
								&nbsp;
								17:37
							</strong>
							
							</div>			

							
						
					</div>
				</div>
 			</div><!--  .topbar -->
 			<div id="topNav">
	 			<div class="container">
	 			<div class="logo">
						<span>Banco BPM</span>
					</div>
		 			<div class="col-xs-9 col-xs-offset-3">
		        		<div class="navbar nav-main">
			        		<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									
									
										
											
													
												
													
													
												
												<li class="navIcon active " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/introduzione.do" target="_parent" title="Introduzione"><div class="ico_riepilogo ico">&nbsp;</div>
													<strong>
														Introduzione
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/modulo.do" target="_parent" title="Modulo F24"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/moduloSemplificato.do" target="_parent" title="Modulo F24 Semplificato"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 Semplificato
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/moduloAuto.do" target="_parent" title="Modulo F24 elem. ident."><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 elem. ident.
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/moduloAccise.do" target="_parent" title="Modulo F24 accise"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 accise
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/riepilogo.do" target="_parent" title="Riepilogo f24"><div class="ico_ultime_disposizioni ico">&nbsp;</div>
													<strong>
														Riepilogo f24
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/WEBHT/pagamenti/f24/contribuenti.do " target="_parent" title="Lista contribuenti"><div class="ico_gestione_beneficiari ico">&nbsp;</div>
													<strong>
														Lista contribuenti
													</strong></a>
												</li>
											
										
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
	      	</div>
		</div>
	</div>





	
					
		



 
<div class="container">
	<div class="breadcrumb pull-right">
		
		
			<span>Pagamento F24</span>
			
			<span>Introduzione</span>
			
	</div>
</div>

		
		<p class="pull-left visible-xs-block hidden-print">
           	<button id="menu-mobile" type="button" class="btn-menu" data-toggle="offcanvas">
           	<span class="icon-bar"></span> 
       		<span class="icon-bar"></span> 
       		<span class="icon-bar"></span> 
           	</button>
         </p>
         
	</div>
	<div class="main row row-offcanvas row-offcanvas-left">
		<div class="container">
			<div id="mainContent" class="center col-xs-12">
			
				<div class="visible-print-block"> 
					<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
					<div class="pull-right">
						  
						<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
					</fmt:formatdate></div>
				</div>
				
				
				
				



  


<div class="container">
<div class="riquadro sicurezzaInfo clearfix">
 		









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Istruzioni versamenti F24</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			Il modello F24 deve essere utilizzato da tutti i contribuenti, titolari e non titolari di partita Iva.<br>Il servizio ti consente di <strong>inviare direttamente via web </strong>il modello F24 e di effettuare, con un’unica operazione, il <strong>pagamento</strong> di somme dovute, compensando il versamento con eventuali crediti.
		</div>



			</div>
		
	
</div>
		<br>
		<div class="clearfix">
		<div class="col-xs-6">
		<div id="tabs1" class="riquadro clearfix">
			
			
			
				<div class="contentPagina">
					<div id="tabs" style="height: 480px;">
<ul>
<li class="active"><a href="#tabs-1">Cosa è possibile pagare</a></li>
<li><a href="#tabs-2">Come iniziare</a></li>
<li><a href="#tabs-3">Come compilare il Modulo F24</a></li>
<li><a href="#tabs-4">Come pagare</a></li>
<li><a href="#tabs-5">note per la compilazione</a></li>
</ul>
<div id="tabs-1" class="activeTab">
<h1><div class="flag sicurezzaInfo">&nbsp;</div>Cosa è possibile pagare</h1>
<br><br>
<p>Questo modello va usato per pagare:</p>
<br>- Imposte sui redditi e ritenute alla fonte<br>- Iva<br>- IMU/TASI e altri tributi locali<br>- Imposte sostitutive delle imposte sui redditi e dell'Iva<br>- Irap<br>- Addizionale regionale o comunale all'Irpef<br>- Contributi e premi INPS, INAIL, ENPALS, INPDAI ed altri enti previdenziali e assicurativi<br>- Diritti cameraliv - Interessi in caso di pagamento rateale e quanto altro previsto<br><br>E' possibile inoltre pagare tutte le <strong>somme dovute</strong> (compresi interesse e sanzioni) in caso di:<br><br>- Liquidazione e controllo formale della dichiarazione<br>- Avviso di accertamento<br>- Atto di contestazione delle sanzioni o Avviso di irrogazione sanzioni<br>- Accertamento con adesione (concordato)<br>- Conciliazione giudiziale<br>- Ravvedimento<br><br>Per ulteriori approfondimenti: <a href="http://www.agenziaentrate.gov.it/" target="_blank">agenzie delle entrate</a>.
<p>&nbsp;</p>
</div>
<div id="tabs-2">
<h1><div class="flag sicurezzaInfo">&nbsp;</div>Come iniziare</h1>
<br><br>
<p>Per compilare un nuovo modulo puoi:</p>
<br>- Duplicare un modulo precedentemente compilato . Per fare questo, sarà sufficiente: <br>1. Cliccare sulla voce del menù pricipale "<strong>RIEPILOGO F24</strong>";<br>2. Impostare i criteri di ricerca;<br>3. Selezionare l’ID del modulo di interesse;4. Cliccare sull’icona "<strong>duplica</strong>" in fondo alla pagina;<br>5. Cliccare su <strong>SALVA BOZZA</strong>.<br>- <strong>Creare un nuovo modulo</strong> cliccando sulla voce del menù pricipale "<strong>MODULO F24</strong>".<br><br><br>In entrambi i casi accederai alla pagina di <strong>compilazione del modulo F24</strong> dove potrai iniziare un modulo ex novo o modificarne uno precompilato. <br><br>Qui potrai, in seguito: <br>1. selezionare il <strong>conto corrente</strong> a cui associare le operazioni di pagamento.2. selezionare un contribuente da una <strong>lista contribuenti</strong> precedentemente salvata (<strong>rubrica contribuenti</strong>) o compilare i campi con i dati di un nuovo contribuente</div>
<div id="tabs-3">
<h1><div class="flag sicurezzaInfo">&nbsp;</div>Come compilare l'F24</h1>
<br><br>1. &nbsp;Seleziona la tipologia di modello da compilare tra quelli disponibili: <br>- F24<br>- F24 Semplificato<br>- F24 Elide (Elementi Identificativi)<br>- F24 Accise<br>2. Seleziona il <strong>conto di addebito<br></strong>3. Compila il modello nelle varie sezioni compresa la data del pagamento e verifica il saldo finale&nbsp;<br>4. Al termine dell'operazione, tramite i pulsanti in fondo alla pagina, puoi: <br>- <strong>inviare</strong> il modello e passare allo step successivo;<br>-&nbsp;<strong>salvare la boza</strong>&nbsp;per modificarla e inviarla in un secondo momento (sarà reperibile nella pagina del Riepilogo F24);<br>- <strong>annullare</strong> l'operazione di compilazione.<br><br>ATTENZIONE:<br>Non è possibile inserire una data del pagamento antecedente a quella di compilazione. La data del pagamento può essere <strong>posticipata</strong> fino ad un massimo di <strong>25 giorni</strong> rispetto alla data di compilazione.L'addebito delle somme in conto corrente verrà effettuato alla data di scadenza richiesta; il conto deve risultare aperto e presentare disponibilità finanziarie sufficienti per addebitare l'intero ammontare del versamento F24. L'invio delle disposizioni con congruo anticipo rispetto alla data di scadenza consente, inoltre, di correggere eventuali errori di compilazione, effettuando la REVOCA F24, ed eseguendo nuovamente l'operazione entro al scadenza prevista, evitando di incorrere in sanzioni.
<p>&nbsp;</p>
</div>
<div id="tabs-4">
<h1><div class="flag sicurezzaInfo">&nbsp;</div>Come pagare</h1>
<br><br>
<p>Dopo aver insertito i dati nella pagina del MODULO F24 (primo step) ed averlo confermato accedi al secondo step (RIEPILOGO).<br>Qui puoi:<br>- visionare il <strong>riepilogo</strong> dei dati precedentemente immessi;<br>- modificare i dati tornando allo step di compilazione.<br>- inviare la delega direttamente alla <strong>banca</strong> cliccando sul pulsante <strong>INVIA DELEGA</strong> in fondo alla pagina.<br><br>Se la procedura di invio è andata a buon fine accederai al terzo ed ultimo step di CONFERMA. <br><br>Qui potrai<br>1. <strong>Scaricare</strong> o <strong>stampare</strong> il tuo modulo F24 ordinario <br>2. <strong>Scaricare</strong> o <strong>stampare</strong> il tuo modulo F24 nella versione semplificata<br>3. <strong>Revocare</strong> la delega appena inviata<br><br>Per seguire l’<strong>iter di elaborazione </strong>della delega appena inviata o per <strong>revocarla</strong> in un secondo momento accedi alla pagina dello STORICO.<br><br>ATTENZIONE:<br>- Nel caso in cui una delega venga inviata lo stesso giorno indicato come <strong>data del pagamento</strong>, la conferma dell’accettazione del modulo o il suo rifiuto verranno comunicati entro <strong>le ore 11:00 del giorno lavorativo successivo</strong>.<br>-Una delega può essere <strong>annullata fino alle ore 24:00</strong> del giorno indicato come data del pagamento.</p>
</div>
<div id="tabs-5">
<h1><div class="flag sicurezzaInfo">&nbsp;</div>Note per la compilazione</h1>
<br><br>
<p>- Il contribuente è tenuto a riportare con <strong>particolare attenzione</strong> il codice fiscale, i dati anagrafici e il domicilio fiscale. <br>- Nelle apposite colonne delle varie sezioni del modello devono essere evidenziati i <strong>codici tributo</strong> o le <strong>causali contributo</strong> per i quali si effettua il versamento e l'anno cui si riferisce il versamento stesso, da indicare con quattro cifre (es.: 2002).<br>- I soggetti il cui periodo d'imposta non coincide con l'anno solare, devono barrare l'apposita casella ed indicare nella colonna "a<strong>nno di riferimento</strong>" il primo dei due anni solari interessati.<br>- Gli importi devono sempre essere indicati con le <strong>prime due cifre decimali</strong> anche nel caso che tali cifre siano pari a zero. In presenza di più cifre decimali occorre procedere all'arrotondamento della seconda cifra decimale con il seguente criterio: se la terza cifra è uguale o superiore a 5, l'arrotondamento al centesimo va effettuato per eccesso; se la terza cifra è inferiore a 5, l'arrotondamento va effettuato per difetto (es.: euro 52,752 arrotondato diventa euro 52,75; euro 52,755 arrotondato diventa euro 52,76; euro 52,758 arrotondato diventa euro 52,76).<br>- Si richiama l'attenzione sulla circostanza che le prime due cifre decimali vanno indicate<strong> anche se pari a zero</strong> come nell'ipotesi in cui l'importo sia espresso in unità di euro (es.: somma da versare pari a 52 euro, va indicato 52,00).</p>
</div>
</div>
				</div>
			
		</div>
		</div>

		<div class="col-xs-6">		
			
			<div id="tabs2" class="riquadro clearfix" style="overflow-y: scroll; height: 236px;">&gt;
			<h1>
				<div class="flag info">&nbsp;</div>
				Domande frequenti
			</h1>
			
					<div>
						<div id="boxAiuto">
<ul>
<li><a href="#aiuto1">Cosa trovo nel Riepilogo F24?</a></li>
<li><a href="#aiuto2">Come avviene la contabilizzazione?</a></li>
<li><a href="#aiuto3">Come posso revocare una delega F24?</a></li>
<li><a href="#aiuto4">Posso stampare la quietanza di pagamento?</a></li>
<li><a href="#aiuto5">Posso creare una mia lista di contribuenti? </a></li>
</ul>
<div id="aiutoBox">
<div id="aiuto1"><strong>Cosa trovo nel Riepilogo F24?<span><a href="#boxAiuto"> &lt; </a></span></strong><br><br> Consultando la sezione “Riepilogo F24” puoi:                  
<ul>
<li>controllare lo stato di invio dei versamenti F24 eseguiti via web;</li>
<li>verificare l'esito della delega F24 inviata, trasmesso dalla Banca (accettata, rifiutata);</li>
<li>verificare l'esito trasmesso dalla Banca sul successivo pagamento (delega pagata, delega insoluta);</li>
<li>revocare le deleghe F24 non ancora contabilizzate;</li>
<li>visualizzare in dettaglio il Documento inserito;</li>
<li>salvare ed eventualmente stampare la quietanza di pagamento disponibile in formato pdf</li>
<li>duplicare una delega già inserita in precedenza.giudiziale</li>
</ul>
</div>
<div id="aiuto2"><strong>Come avviene la contabilizzazione?<span><a href="#boxAiuto"> &lt; </a></span></strong><br><br> La contabilizzazione del pagamento della delega potrà avvenire con una delle seguenti due modalità:<br> 
<ul>
<li>Se l'F24 è stato trasmesso alla Banca in data antecedente alla data di incasso, verrà addebitato in conto corrente nel giorno del pagamento da te richiesto.</li>
<li>Se l'F24 è stato trasmesso alla Banca lo stesso giorno in cui deve avvenire il pagamento, risulterà addebitato in conto corrente entro i due giorni lavorativi successivi.</li>
</ul>
ATTENZIONE: Nel giorno del pagamento il conto corrente deve risultare aperto ed avere disponibilità finanziarie sufficienti per addebitare l’intero ammontare della delega F24.</div>
<div id="aiuto3"><strong>Come posso revocare una delega?<span><a href="#boxAiuto"> &lt; </a></span></strong><br><br> E' possibile revocare una delega F24 sino al giorno in cui matura l'addebito in conto corrente. <br>Nella sezione Riepilogo F24 occorre selezionare la casella "SEL", posizionata a sinistra del modello, e poi cliccare su "REVOCA".</div>
<div id="aiuto4"><strong>Posso stampare la quietanza di pagamento?   <span><a href="#boxAiuto"> &lt; </a></span></strong><br><br> Come previsto dalla vigente normativa, la quietanza non viene più inviata al domicilio del cliente, ma è disponibile esclusivamente in formato elettronico (file pdf), reperibile nella sezione "Riepilogo F24" a partire dal tardo pomeriggio del giorno di contabilizzazione. La Banca si impegna a conservare tale documento per almeno 10 anni, ti consigliamo di salvare la quietanza negli archivi del tuo PC. Nella medesima sezione "Riepilogo F24" è anche disponibile il dettaglio di ogni singola delega, così come è stata da te compilata.</div>
<div id="aiuto5"><strong>Posso creare una mia lista di contribuenti?<span><a href="#boxAiuto"> &lt; </a></span></strong><br><br>Al fine di agevolare la compilazione dell'F24 è possibile gestire una propria lista di contribuenti nella sezione "Lista contribuenti" e richiamare i dati salvati in fase di compilazione.</div>
</div>
</div>
					</div>
			
		</div>
		
			
			<div id="tabs3" class="riquadro clearfix" style="overflow-y: scroll; height: 236px;">&gt;
					<h1>
						<div class="flag info">&nbsp;</div>
						Possibili stati di una delega F24
					</h1>
					
						<div>
							<div id="migl">
<ul>
<li><span>1</span><a href="#miglText1">Delega da inviare</a></li>
<li><span>2</span><a href="#miglText2">Trasmessa a banca</a></li>
<li><span>3</span><a href="#miglText3">Rifiutata da banca</a></li>
<li><span>4</span><a href="#miglText4">Accettata da Banca</a></li>
<li><span>5</span><a href="#miglText5">Contabilizzata</a></li>
<li><span>6</span><a href="#miglText6">Non contabilizzata</a></li>
</ul>
</div>
<div id="boxMigl">
<div id="miglText1"><span>1 </span><strong>Delega da inviare<a href="#migl"> &lt; </a></strong><br><br>La delega F24 è stata salvata in “Bozza“; NON è stata inviata alla Banca.</div>
<div id="miglText2"><span>2</span><strong>Trasmessa a banca<a href="#migli"> &lt; </a></strong><br><br>
<div>La delega è stata inviata alla Banca che provvederà a verificarne la correttezza formale dei dati.</div>
</div>
<div id="miglText3"><span>3</span><strong>Rifiutata da banca<a href="#migl"> &lt; </a></strong><br><br>
<div>Le verifiche effettuate dalla Banca sulla delega hanno rilevato errori, specificati nell’apposito messaggio di esito inviato. La delega, quindi, deve essere reinserita correttamente.</div>
</div>
<div id="miglText4"><span>4</span><strong>Accettata da Banca<a href="#migl">&lt;</a></strong><br><br>
<div>La Banca conferma la correttezza della delega F24, che verrà elaborata nella data di pagamento indicata. Per il buon esito dell’operazione, nel giorno di addebito il conto deve risultare aperto ed avere la capienza necessaria per coprire l’intero ammontare dell’F24.</div>
</div>
<div id="miglText5"><span>5</span><strong>Contabilizzata<a href="#migl">&lt;</a></strong><br><br>
<div>La delega F24 risulta correttamente pagata, addebitata in conto corrente. La Banca procederà al riversamento e alla rendicontazione all’Agenzia delle Entrate.</div>
</div>
<div id="miglText6"><span>6</span><strong>Non contabilizzata<a href="#migl">&lt;</a></strong><br><br>
<div>La delega F24 non è stata pagata per mancanza dei fondi sul conto corrente. La Banca non procederà al riversamento e alla rendicontazione all’Agenzia delle Entrate.</div>
</div>
</div>
						</div>
					
					</div>
		</div>
		</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	//box 'migliora la tua sicurezza'
	$('#migl > ul > li').click(function(e){
		e.preventDefault();
		$("div[id^='miglText']").hide();
		var boxAttivo = $(this).find('a').attr('href'); 
		$('#migl').hide();
		$(boxAttivo).show();
	})
	
	$("div[id^='miglText'] a").click(function(e){
		e.preventDefault();
		 
		$("div[id^='miglText']").hide();
		$("#migl").show();
	})

	// box 'come possiamo aiutarti'
	$('#aiutoBox div[id^=aiuto] span a').click(function(e){
		e.preventDefault();
		$(this).closest('div').hide();
		$('#boxAiuto ul').fadeIn();
	})

	// box 'dispositivo sicurezza'
	$('#tabs ul > li:first-child').addClass("active");
	var ref = $('#tabs ul > li:first-child').find('a').attr('href');
	$(ref).addClass("activeTab");
	
	$('.contentPagina h2').each(function(){
	
		var title = $(this).text();
		$(this).replaceWith("<h1><div class='flag sicurezzaInfo'>&nbsp;</div>"+title+"</h1>");
	});
	$("#tabs ul li").click(function(e){
		e.preventDefault();
		$("#tabs").find(".active").removeClass("active");
		$(this).addClass("active");
		var ref = $(this).find("a").attr("href");
		var activeTab = $("#tabs").find(".activeTab").fadeOut("slow",function(){
			$(this).removeClass("activeTab");
		 	if($(ref).height() > $("#tabs-1").height()){
				$("#tabs").css("overflow-y", "scroll");
			}else{
				$("#tabs").css("overflow-y", "auto");
			} 
			$(ref).addClass("activeTab").fadeIn("slow");
		});
		
	});
	
	
	$("#boxAiuto > ul > li").click(function(e){
		e.preventDefault();
		var boxAiuto = $(this).find("a").attr("href");
		var height = $("#boxAiuto > ul ").height();
		$("#boxAiuto").css("min-height", height+"px");
		$("#boxAiuto > ul ").hide();
		$(boxAiuto).fadeIn()
	})
	
	var h_tabs1 = $("#tabs1").height(); 
	$("#tabs").height(h_tabs1);

	var altezza = Math.floor((h_tabs1 - 12)/2);
	
	$("#tabs2").height(altezza);
	$("#tabs3").height(altezza);

})
</script>

			</div>
			
			<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-print" id="sidebar" style="min-height: 0px;">
				<div class="sidebar-container">
			 		<div class="list-group">
						

















	<!-- top navbar -->

	<div class="container visible-xs-block">
		<div class="row sidebar-menu">
			<!-- sidebar -->
			
				
				<ul data-offset-top="120" class="nav nav-stacked">
				
				
					<li onclick="apriMenuResponsive(this)" id="menu_0" class="">
						<a href="#">
							<strong>Pagamento F24</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_riepilogo">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/introduzione.do" title="Introduzione">Introduzione</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/modulo.do" title="Modulo F24">Modulo F24</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/moduloSemplificato.do" title="Modulo F24 Semplificato">Modulo F24 Semplificato</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/moduloAuto.do" title="Modulo F24 elem. ident.">Modulo F24 elem. ident.</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/moduloAccise.do" title="Modulo F24 accise">Modulo F24 accise</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_ultime_disposizioni">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/riepilogo.do" title="Riepilogo f24">Riepilogo f24</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_beneficiari">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/contribuenti.do " title="Lista contribuenti">Lista contribuenti</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
			</ul>
			<div style="margin-left: 10px; margin-right: 10px; margin-top: 60px;"> 
				<hr class="hr-menu">
			</div>
			<ul class="nav nav-stacked">
				<li class="logout" style="margin-bottom: 5px;">
					<a href="#" id="frmLogout" class="" title="Esci" onclick="$('form#logout').submit(); return false;">
						<strong>Esci</strong>
					</a>
					<hr>
				</li>
			</ul>
			
			<!-- content area -->
			<div class="col-xs-12 col-sm-8 col-md-9 content"></div>
		</div>
		<form action="/WEBHT/logout.do" name="frmLogout" id="logout" method="post" target="_top">
			<div style="display: none">
				<input type="hidden" name="logoutExitPage" value="https://youwebcard.bancopopolare.it/logout.html">
				<input type="hidden" name="logoutKey" value="">
			</div>
		</form>
		<script>
			function apriMenuResponsive(item){
				$('ul.nav > li').each(function(){
					if($(this).attr('id') == $(item).attr('id')){
						$(item).find('ul.menu-child').toggle( function(){
						var newHeight = $('.sidebar-menu').height();
						$('.sidebar-container').css('min-height', newHeight);
						
						});
					}else{
						$(this).find('ul.menu-child').hide('slow');
					}
				})

			}
		</script>

	</div>

					</div>
				</div>
	        </div>
	        
		</div>	
	</div>
</div>	
<div id="divFooter" class="clearfix">
	






<div class="row footer visible-xs">
	<div class="assistenza col-xs-8">
		<h4 style="margin-bottom:4px">Assistenza Clienti</h4>
		<a href="/WEBHT/serviziPerTe/riferimenti.do">
			<img src="/HT/IMAGES/nGrafica/posta.png" alt="contatti" title="contatti" class="image-responsive" style="float:left">
		</a>
		<div style="margin-left:40px">
			Numero verde:&nbsp;<strong>800.024.024</strong><br>
			Email:&nbsp;<a href="/WEBHT/info/contattaci.do"><strong>assistenza.clienti@bancopopolare.it</strong></a>			
		</div>
	</div>
	
	<div class="col-xs-12 margin-top5 margin-bottom5">
		<div class="col-xs-6 text-center"><a href="/WEBHT/serviziPerTe/disableResponsive.do?curl=/pagamenti/f24/introduzione.do" title="Sito YouWeb per PC"><strong>Sito YouWeb per PC</strong></a></div>
		<div class="col-xs-6 text-center"><a href="http://www.bancopopolare.it/media/BP_Privacy_Policy.pdf" target="_blank">Privacy</a></div>
	</div>
	
</div>
<div class="row footer hidden-xs">
	<div class="container">
		<div class="clearfix">
		<div class="col-xs-6">
			
			
			<div class="assistenza clearfix" style="margin:0">
				<h4>Assistenza Clienti</h4>
				<a href="/WEBHT/info/contattaci.do"><img src="/HT/IMAGES/nGrafica/posta.png" class="hidden-print"> </a>
				<div>
					Numero verde:&nbsp;<strong>800.024.024</strong><br>
					Email:&nbsp;<a href="/WEBHT/info/contattaci.do"><strong>assistenza.clienti@bancopopolare.it</strong></a>
				</div> 
			</div>
			
			<div class="riferimenti  clearfix hidden-print">
					<a href="/WEBHT/serviziPerTe/riferimenti.do"><img src="/HT/IMAGES/nGrafica/filiale.png" class="hidden-print"> </a>
				<div style="margin-bottom:0;">
					Per qualsiasi altra esigenza è a tua disposizione<br>
				il <strong>Gestore BELLO GIUSEPPE</strong> presso la tua filiale di riferimento. 
				</div>
			</div>
		
		</div>
		<div class="col-xs-4 col-xs-offset-2">
			<div class="footer-logo pull-right"> 
				
					<img src="/HT/IMAGES/nGrafica/logo_footer_bbpm.png" class="pull-right" title="BANCO BPM" alt="BANCO BPM">
				</div>
		</div>
		</div>
		
		
		<div class="col-xs-12 oCenter hidden-print" style="position:absolute; bottom:7px;">
			© 2000-2017&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright  - 
			<a href="http://www.bancopopolare.it/media/BP_Privacy_Policy.pdf" target="_blank" style="font-weight:normal;">Privacy</a>
		</div>
		
	</div>
</div>

	<div class="hidden" id="tooltip_popover">

		<div id="help_sharpe" class="bottom" data-auto="false">
<h3 class="popover-title">Sharpe</h3>
<div class="popover-content">L'indice di Sharpe misura l'efficienza della gestione ed è pari al rapporto tra l'extra-rendimento del Fondo/Comparto rispetto ad un'attività non rischiosa e la sua volatilità. Evidenzia quindi quale rendimento è stato prodotto, in eccesso al rendimento di un'attività priva di rischio, per unità di rischio derivante dalla detenzione del Fondo/Comparto.</div>
</div>

		<div id="help_alpha" class="bottom" data-auto="false">
<h3 class="popover-title">Alpha di Jensen</h3>
<div class="popover-content">L'alpha di Jensen è il rendimento incrementale di un fondo rispetto alla performance attesa. Un alpha positivo indica che il fondo ha una performance migliore rispetto a quanto atteso in relazione al suo beta, mentre un alpha negativo significa che il fondo ha una performance peggiore rispetto a quanto atteso in relazione al suo beta. L'alpha di Jensen è interpretata quindi come una misura di selectivity, cioè della capacità del Gestore nella selezione dei titoli più "performanti"</div>
</div>

		<div id="help_beta" class="bottom" data-auto="false">
<h3 class="popover-title">Beta</h3>
<div class="popover-content">L'indice Beta misura la sensibilità di un fondo alle oscillazioni del mercato. Per definizione il beta del mercato è pari a 1,00. Un coefficiente beta di 1,1 indica che il fondo può ottenere una performance del 10% migliore/peggiore rispetto all'indice di mercato in caso di rialzo/ribasso.</div>
</div>

		<div id="help_rischio" class="bottom" data-auto="false">
<h3 class="popover-title">Rischio</h3>
<div class="popover-content">La rischiosità di uno strumento è basata sull’Indicatore sintetico di rischio (SRRI) presente nel KIID e suddiviso in 6 classi qualitative, dove l’indicatore 1 e 2 rappresentano il rischio 1 “Minimo” fino ad arrivare al rischio 6 “Alto”.</div>
</div>

		<div id="help_rating" class="bottom" data-auto="false">
<h3 class="popover-title">Rating</h3>
<div class="popover-content">Il rating calcolato da Deus Technology è un indicatore quantitativo di scoring, su scala da 1 a 5, che si basa sulla combinazione di vari elementi (lo Sharpe, la Volatilità, il Max Drow Down - perdita massima maturata rispetto al valore di picco registrato - e il Mean Return - il ritorno atteso dall’investimento-) atti a comparare rendimento e rischio del fondo su vari orizzonti temporali. Lo strumento potrebbe essere <span style="text-decoration: underline;">privo di rating</span> in caso manchino i dati sufficienti per il calcolo, esempio: fondi che hanno meno di 3 anni di serie storica.</div>
</div>

		<div id="help_volatilita" class="bottom" data-auto="false">
<h3 class="popover-title">Volatilità</h3>
<div class="popover-content">La Volatilità è la variabilità del rendimento del fondo nel tempo e rappresenta quindi la tendenza dei valori della quota a discostarsi dal valore medio nel periodo considerato. Maggiore è la volatilità di un fondo, più il fondo è rischioso.</div>
</div>

		<div id="help_addPref" class="bottom">
<h3 class="popover-title">Aggiungi contenuti <br>alla home page</h3>
<div class="popover-content">Puoi selezionare una funzione tra quelle disponibili qui sotto e trascinarla verso destra. Il pannello scelto sarà visualizzato già in accesso alla tua pagina iniziale. A fine operazione, ricordati di cliccare su "Salva" a fondo pagina.</div>
</div>

		<div id="help_refresh" class="left">
<h3 class="popover-title">Aggiorna dati</h3>
<div class="popover-content">Cliccando su questa icona, aggiorni i dati presenti in questa tabella.</div>
</div>

		<div id="help_informationRatio" class="bottom" data-auto="false">
<h3 class="popover-title">L'Information Ratio</h3>
<div class="popover-content">L'Information Ratio consente di valutare la capacità del gestore di sovraperformare il benchmark, in relazione al rischio assunto. E´ calcolato rapportando il differenziale di rendimento tra fondo e indice di riferimento, alla Tracking Error Volatility che indica la volatilità dei rendimenti differenziali di un fondo rispetto ad un indice di riferimento. Un information ratio positivo indica una gestione attiva "efficiente", il Fondo/Comparto ha cioè battuto il benchmark</div>
</div>

		<div id="help_trackingError" class="bottom" data-auto="false">
<h3 class="popover-title">Tracking error volatility</h3>
<div class="popover-content">La tracking error volatility è la volatilità della differenza tra il rendimento del Fondo/Comparto e il rendimento del benchmark. Più la volatilità del tracking error è elevata più l'andamento del Fondo/Comparto si discosta da quello del benchmark. La sua assenza è da attribuire ad una storicità non sufficiente del Fondo/Comparto.</div>
</div>

		<div id="help_benchmark" class="bottom" data-auto="false">
<h3 class="popover-title">Benchmark</h3>
<div class="popover-content">Indice o insieme di indici che sintetizza l'andamento dei mercati in cui investe il Fondo/Comparto. Fornisce un'indicazione del profilo rischio-rendimento atteso dell'investimento. Per i fondi di diritto italiano, il benchmark indicato nella scheda è quello dichiarato nel prospetto informativo del Fondo/Comparto ed è convertito in euro. Per i fondi esteri, per cui non esiste tale obbligo, è stato scelto un benchmark in coerenza con la categoria di appartenenza del Fondo/Comparto, così da permettere ugualmente un'analisi ed un confronto con un parametro di riferimento.</div>
</div>

		<div id="help_commissioniGestione" class="bottom" data-auto="false">
<h3 class="popover-title">Commissione di gestione</h3>
<div class="popover-content">E' il costo fisso del servizio di gestione. E' indicato come percentuale annua di quanto investito nel fondo ed è pagato dal risparmiatore indipendentemente dal risultato ottenuto.</div>
</div>

		<div id="help_rquadro" class="bottom" data-auto="false">
<h3 class="popover-title">R-Quadro</h3>
<div class="popover-content">E' un indicatore che riflette la percentuale di oscillazione di un fondo riconducibile a oscillazioni nel benchmark di quel fondo. Un R-quadro pari a 1 indica che tutte le oscillazioni del fondo possono essere ricondotte alle oscillazioni dell'indice.</div>
</div>

		<div id="help_importoSottoscrizione" class="bottom" data-auto="false">
<h3 class="popover-title">R-Quadro</h3>
<div class="popover-content">Indipendentemente dalla divisa di denominazione del fondo/sicav l’importo da indicare per la sottoscrizione è sempre in euro.</div>
</div>

		<div id="help_removePref" class="bottom">
<h3 class="popover-title">Elimina contenuti dalla home page</h3>
<div class="popover-content">Qui trovi i contenuti presenti nella tua pagina iniziale. Per eliminarli puoi cliccare sui singoli pannelli e trascinarli verso la colonna di sinistra. A fine operazione,  ricordati di cliccare su "Salva" a fondo pagina.</div>
</div>

		<div id="help_logo" class="right">
<h3 class="popover-title">Homepage</h3>
<div class="popover-content">Cliccando sul logo YouWeb, torni sempre alla tua pagina iniziale da qualsiasi sezione tu stia navigando.</div>
</div>

		<div id="help_prefer" class="bottom">
<h3 class="popover-title">Preferenze</h3>
<div class="popover-content">Personalizza la tua pagina iniziale scegliendo i contenuti per te più importanti.</div>
</div>

		<div id="help_btnRicerca" class="left">
<h3 class="popover-title">Imposta parametri</h3>
<div class="popover-content">Grazie ai parametri puoi affinare la tua ricerca indicando, ad esempio, un importo minimo e massimo o un più preciso riferimento temporale.</div>
</div>

		<div id="help_selezionaCC" class="top">
<h3 class="popover-title">Rapporti</h3>
<div class="popover-content">Cliccando su questa freccia, accedi a tutti i tuoi conti. Se vuoi invece modificare l'ordine con cui vengono visualizzati, vai alla sezione <a href="/WEBHT/serviziPerTe/rapportiPredefiniti.do">Servizi per te &gt; Rapporti in primo piano.</a></div>
</div>

	</div>

</div>

</body>