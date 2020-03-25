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
<!-- aol.step3 -->

















<!-- INIZIO DEBUG -->

<!-- FINE DEBUG -->



<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

<!-- INIZIO JAVASCRIPT -->
<script type="text/javascript" src="/wscmn/js/ret/TXTcommon.js"></script>

<script type="text/javascript" src="/wscmn/js/ret/TXTlogin.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTModalita.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTmanagePageExpiration.js"></script>
<script type="text/javascript"  src="/wscmn/js/ret/TXTcommonAol.js"></script>
<script type="text/javascript"  src="/js/ret/wz_tooltip.js"></script>

<script type="text/javascript">
	<!--
		function openPop(link){
			if(document.aol.modalita_riconoscimento[1].checked){
				window.open(link,'main','width=780,height=500,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
			}
		}
		
		function openPop2(link){
			window.open(link,'main','width=780,height=500,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
		}

		function goMyBozza(){
			goBozze(document.aol, '/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&funz=bozze&fromAol=yes&CNT_TARGET=Privati', 3);
		}
		
	//-->
</script>

<script type="text/javascript">
<!--
	noBack();
//-->
</script> 
<!-- FINE JAVASCRIPT -->

<form id="aol" name = "aol" action="/webankpub/wb/2l/do/aol/wbwsAolRiepilogoDati.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" method= "post">
<input type="hidden" name="oksub3" value="nullo" />
<input type="hidden" name="fromPageName" value="wsPUaol3.jsp" />
<input type="hidden" name="OBS_KEY" value='pro_wbn_apri_contome0' />
<input type="hidden" name="BV_UseBVCookie" value="Yes" />
<input type="hidden" name="tabpromotore" value="" />
<input type="hidden" name="ricercaAgenzia" value="" />
<!-- campo nascosto che viene valorizzato con l'indirizzo dell'agenzia scelta se l'utente fa la ricerca -->
<input type="hidden" name="ind_age_ric" value="" />

<!-- INTESTAZIONE -->

<h2>Richiesta di apertura del Conto Webank, il conto tutto online di Webank</h2>
<p>Ti serve una mano per compilare la richiesta? Chiamaci al numero verde <span class="evidente">800 148 149</span>.</p>

	



<div class="step "><span>1</span> Dati intestatari</div>
<div class="step"><span>2</span> Servizi</div>
<div class="onStep step"><span>3</span> Modalità riconoscimento</div>
<div class="step"><span>4</span> Riepilogo</div>

<div class="step lastStep"><span>5</span> Informative</div>

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
		



<br>
<!-- FINE INTESTAZIONE -->

<!-- INIZIO GESTIONE CONVENZIONE UNICI/AGUNI -->
<SCRIPT LANGUAGE="JavaScript">  
	function cambiaAg() { 
		var selIdx = document.aol.mailAssegnatario.selectedIndex; 
		var newSel = document.aol.mailAssegnatario.options[selIdx].text; 
		document.aol.agAssegnatario.value = newSel;
		//alert("agAssegnatario: " + document.aol.agAssegnatario.value); 
	}  
</SCRIPT>
<input type="hidden" name="agAssegnatario" value="null"/>
<!-- FINE GESTIONE CONVENZIONE UNICI/AGUNI -->

<div class="box73">
<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Modalit&agrave; riconoscimento</h2><img src="/img/ret/ico1gr_aol_acc_opened.gif"/><br class="clear" /></div><div class="cont" style="display:block;">

<div>

	<p>
	

		
	Comincia a scegliere qui sotto come <a href="javascript:pop_up_int('/webankpub/wb/contents/attiva_conto/contoMe.jsp?BV_UseBVCookie=Yes', 'Modalit&agrave; di riconoscimento del cliente', 'small' );">fare il riconoscimento</a> degli intestatari del conto. Ti daremo tutte le altre istruzioni: <br>
-	sull'<b>email</b> che ricevi subito dopo aver inviato la richiesta online<br>
-	sulla guida <b>"Come aprire Conto Webank"</b> che ricevi insieme al contratto.
	

	</p>

	
	
		<h3>Chi deve fare il riconoscimento</h3>
		Secondo quello che hai scritto al <b>passo 1</b> di questa richiesta <b>devono</b> fare il riconoscimento questi intestatari:
		<ul>
			
			<li>simona monte</li>
			
			
		</ul>

		
		
		
	
			
	
	<p><b>Come fare il riconoscimento</b></p>
	<div class="clear"></div>
	<div class="boxEsteso">
	<div class="boxEstesoFooter">
	<div class="boxEstesoHeader"><h4>SUGGERITO DA WEBANK</h4>
		<div class="fieldcontainer">
			<input type="radio" name="modalita_riconoscimento" value="bonifico" onclick="javascript:showBox('boxVersamento', 'boxAgenzia')" id="bonifico">
		</div>

		<div class="formcontainer">
		<span class="title">Fai un versamento</span>
		<p>
			&Egrave; il modo pi&ugrave; comodo: gli intestatari fanno un bonifico di 100 euro che accrediteremo sul Conto Webank al momento dell'apertura
		</p>
		<div id="boxVersamento" style="display: none;">
		<hr>

		<p>
			Per permetterci di fare il riconoscimento, ti chiediamo di anticipare nell'apposito campo IBAN dei conto correnti dai quali gli intestatari faranno i 
			<a href="javascript:void(0)" onmouseover="Tip('Si pu&ograve; effettuare un bonifico direttamente online se gi&agrave; si utilizza un servizio di home banking altrimenti dalla propria banca', WIDTH, 400, BGCOLOR, '#fff', BORDERCOLOR, '#d6d6d6', FADEIN, 500, SHADOW, 'TRUE', SHADOWCOLOR, '#e9e7e8'), SHADOWWIDTH, 1" >
			bonifici</a> di 100&euro; oppure, solo per gli intestatari impossibilitati, di scegliere il riconoscimento tramite bonifico per cassa.  
		</p>
				<ul>
					
					<li>
						<span>simona monte</span>

						<table>
							
							<tr>
								<td><input type="radio" name="tipo_id_bon_int_1" value="0" onclick="javascript:disabilitaCampiTipoCor1();"></td>
								<td>IBAN: <input type="text" name="ibanclientebon_int1" maxlength="27" size="37" value=""></td>
							</tr>
							<tr>
								<td><input type="radio" name="tipo_id_bon_int_1" value="2" onclick="javascript:disabilitaCampiTipoCor1();"></td>
								<td>BONIFICO PER CASSA*</td>

							</tr>
					</table>
					</li>
				
					
					<script type="text/javascript">
						//metto il default e valuto le disabilitazioni
						document.aol.tipo_id_bon_int_1[0].checked=true;
						disabilitaCampiTipoCor1();
					</script>
					
				
			
					
			
					
				<hr>
				<p class="footnote">
					* : Scegli questa opzione se hai un conto Banco Posta (o non sei titolare di alcun conto corrente) e non puoi recarti presso una filiale del Gruppo Bipiemme.
					(Banca Popolare di Milano, Banca di Legano, Cassa di Risparmio di Alessandria e Banca Popolare di Mantova).
					<br><strong>Importante: verifica che l'agenzia sia disponibile a vidimare il modulo.</strong>

				</p>
			</div>				
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- GREYBOXED OBJECTS -->
		<div class="greyboxed extended">
			<div class="heading"><img src="/img/ret/greyboxed_top_right.gif"></div>
			<div class="body">

				<div class="fieldcontainer"><input type="radio" name="modalita_riconoscimento" value="agenzia" onclick="showBox('boxAgenzia', 'boxVersamento');" id="altro"></div>
				<div class="formcontainer">
					<span class="title">In Agenzia</span>
						<p>
						Gli intestatari vanno in un'agenzia del Gruppo Bipiemme a firmare davanti al nostro incaricato.
						</p>
						<div id="boxAgenzia" style="display: none;">
							Cerca l'agenzia pi&ugrave; vicina:
							<select id="tipo_age_ric" name="tipo_age_ric" class="inputStep2 tel">

								<option value="BPM">Banca Popolare di Milano</option>
								<option value="BDL">Banca di Legnano</option>
								<option value="CRA">Cassa di risparmio di Alessandria</option>
								<option value="BM">Banca Popolare di Mantova</option>
							</select>
							
							<hr>
							<div class="btncontainer">

								<a title="Ricerca Agenzia" class="btnformright" href="#" onclick="javascript:window.open('/webankpub/aol/wsRicercaCabBpmBdlIntro.do?BV_UseBVCookie=Yes&from=ricbpmbdl','main','width=780,height=500,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');" title="Ricerca agenzia" ><img alt="" src="/img/ret/btn_left_ar.gif"><span>cerca</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
							</div>
						</div>
				</div>
			</div>
			
		
			<div class="footer"><img src="/img/ret/greyboxed_bottom_right.gif"></div>
		</div>
		<!-- FINE GREYBOXED OBJECTS -->
<!-- notaio -->
		 		 <div class="greyboxed extended">
		 		 		 <div class="heading"><img src="/img/ret/greyboxed_top_right.gif"></div>
		 		 		 <div class="body2">
		 		 		 		 Fare il riconoscimento &egrave; semplice e non ha costi aggiuntivi. Basta <strong>firmare il modulo dal notaio</strong>

		 		 		 		 il giorno della stipula del mutuo.<br/>
		 		 		 		 Trovi le altre istruzioni per aprire il conto corrente:
		 		 		 		 <ul>
		 		 		 		 		 <li>sull'<strong>email</strong> che ricevi subito dopo aver inviato la richiesta online</li>
		 		 		 		 		 <li>sulla guida "<strong>Come aprire Conto Webank</strong>" che ricevi insieme al contratto.</li>

		 		 		 		 </ul>
		 		 		 </div>
		 		 		 
		 		 
		 		 		 <div class="footer"><img src="/img/ret/greyboxed_bottom_right.gif"></div>
		 		 </div>
		
	<!--fine  notaio -->	
		
		
		<script type="text/javascript">
			if (document.aol.modalita_riconoscimento[0].checked == true)
				document.getElementById('boxVersamento').style.display = 'block';
			else if (document.aol.modalita_riconoscimento[1].checked == true)
				document.getElementById('boxAgenzia').style.display = 'block';
		</script>





</div>
</div>
</div>
</div>

</form>

<div id="buttonsOnLeft">
	<div class="btnOut white">

		<!--<a href="/webankpub/wb/2l/do/aol/wbwsPUaol2.do?BV_UseBVCookie=Yes&fromPageName=wsPUaol3.jsp&CNT_TARGET=Privati" title="Indietro">
			INDIETRO
		</a>-->
		<a href= "/connect.php?page=tpl_pub_aol3.php" title="Avanti">INDIETRO</a>
	
	</div>
</div>

<div id="buttonsOnRight">

		<div class="btnOut">
		<a href="javascript:openAlert('salvaInBozza');" title="Salva bozza">
		SALVA BOZZA
	</a>

	</div>
	

	<div class="btnOut">
	
		
		<!--<a href= "javascript:modalita(1,'false',false, '');" title="Avanti">
			AVANTI
		</a>-->
		
		<a href= "/connect.php?page=tpl_pub_aol5.php" title="Avanti">AVANTI</a>
	</div>

</div>
<div class="clear"></div>









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

<script type="text/javascript">
<!--

//-->
</script>

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

