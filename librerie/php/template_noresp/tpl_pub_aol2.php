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
	<a href="#" id="btnchat"  class="btnchataol"><img src="/img/str_pulsante_chat_aol_disabled.jpg" alt =""   /></a>
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
<!-- aol.step1 -->











<!--%@ page buffer="1024kb"%-->




<!-- INIZIO DEBUG -->

<!-- FINE DEBUG -->



<link rel="stylesheet" type="text/css" href="/css/ret/pub_aol.css" />

<!-- INIZIO JAVASCRIPT -->
<script type="text/javascript" src="/wscmn/js/ret/TXTmanagePageExpiration.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTcommon.js"></script>

<script type="text/javascript" src="/wscmn/js/ret/TXTlogin.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTcheckAnagrafica.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/TXTcommonAol.js"></script>
<script type="text/javascript" src="/js/ret/bloccodati.js" ></script>
<script type="text/javascript" src="/js/ret/wz_tooltip.js" ></script>
<script type="text/javascript" src="/js/ret/utilities.js"></script>

<script type="text/javascript">
	var cgi_script = '/webankpub';
	function updateComuni(idDiv, provObj, nameSelect, idSelect, fraz, nInt, funz){
		prov = provObj.value;
		var div_id=idDiv;
		var url='/aol/wb/ajax/comuni.jsp';
		var params='provincia=' + prov + '&idSelect='+idSelect+'&nameSelect='+nameSelect+'&frazioni='+fraz+'&nInt='+nInt+'&funz='+funz;
		var wait_html='<p style=\"color:#666666; padding:6px\">Richiesta in corso...</p>';
		sendRequest(div_id, url, params, null, wait_html);
	}

	function goMyBozza(){
		goBozze(document.aol, '/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&funz=bozze&fromAol=yes&CNT_TARGET=Privati', 1);
	}
</script>

<script type="text/javascript">
	var act = new Date(2009,11,15,16,33,21,0);

</script>

<script type="text/javascript">
<!--
	var act = new Date(2009,11,15,16,33,21,0); 
	noBack();
//-->
</script>

<script language="Javascript">
	var n = "1";
</script>
<!-- FINE JAVASCRIPT -->

<!-- INIZO PAGINA -->

<h2>Richiesta di apertura del Conto Webank, il conto tutto online di Webank</h2>
<p>Ti serve una mano per compilare la richiesta? Chiamaci al numero verde <span class="evidente">800 148 149</span>.</p>




<div class="step onStep "><span>1</span> Dati intestatari</div>
<div class="step"><span>2</span> Servizi</div>
<div class="step"><span>3</span> Modalità riconoscimento</div>
<div class="step"><span>4</span> Riepilogo</div>

<div class="step lastStep"><span>5</span> Informative</div>

<div class="clear"></div>

<br>










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
		



<form name="aol" action="/webankpub/wb/2l/do/aol/wbwsPUaol2.do?BV_UseBVCookie=Yes&CNT_TARGET=Privati" method="post">
<input type="hidden" name="oksub1" value="nullo" /> 

<input type="hidden" name="fromPageName" value="wsPUaol1.jsp" /> 
<input type="hidden" name="OBS_KEY" value="pro_wbn_apri_contome0" /> 
<input type="hidden" name="BV_UseBVCookie" value="Yes" /> 
<input type="hidden" name="cod_fiscale_int1_errato" /> 
<input type="hidden" name="cod_fiscale_int2_errato" /> 
<input type="hidden" name="cod_fiscale_int3_errato" />  

<!-- INIZIO DATI PRIMO INTESTATARIO -->
<br class="clear" /><br>
<div class="box73">
<div class="item">
<div class="tit" onmouseover = "this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('.gif','_hover.gif'); this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)';" onmouseout = "this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_hover.gif','.gif');" onclick="if(this.nextSibling.style.display!='block'){this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_closed','_opened'); this.nextSibling.style.display='block';}else{this.style.backgroundImage = 'url(/img/ret/str_aol_titaccordion_hover.gif)'; this.getElementsByTagName('img')[0].src = this.getElementsByTagName('img')[0].src.replace('_opened','_closed');this.nextSibling.style.display='none';}"><h2>Dati dell'intestatario </h2><img src="/img/ret/ico1gr_aol_acc_opened.gif"/><br class="clear" /></div><div id="boxAol1" class="cont" style="display:block;">
<div>

<h3>DATI ANAGRAFICI</h3>
<div class="tab1">Nome*</div>

<div class="tab2"><input type="text" name="nome_int1" value="simona" disabled="disabled"></div>
<div class="tab3">Cognome*</div>
<div class="tab4">
	<input type="text" name="cognome_int1" value="monte" disabled="disabled">
</div>
<div class="clear"></div>

<div class="tab1">Sesso*</div>
<div class="tab2">
	<input type="radio" name="sesso_int1" value="M" disabled="disabled"> M 
	<input type="radio" name="sesso_int1" value="F" checked="checked" disabled="disabled"> F

</div>
<div class="tab3">Codice fiscale*</div>
<div class="tab4"><input type="text" name="cod_fiscale_int1" maxlength="16" size="20" value="MNTSMN72H58F205V" disabled="disabled">
</div>

<div class="clear"></div>

<div class="tab1">Data di nascita*
<div class="smallNote">(GG MM AAAA)</div>
</div>
<div class="tab2">
<input type="text" name="gg_nascita_int1" maxlength="2" size="2" value="18" disabled="disabled" class="inputStep2"> 
<input type="text" name="mm_nascita_int1" maxlength="2" size="2" value="06" disabled="disabled" class="inputStep2"> 
<input type="text" name="aa_nascita_int1" maxlength="4" size="2" value="1972" disabled="disabled" class="inputStep2">
</div>

<div class="tab3">Nato all'estero</div>
<div class="tab4">
	<input type="checkbox" name="estero_int1" value="SI" onclick="javascript:estero(1);">
</div>
	
<div class="clear"></div>

<input type="hidden" name="luogo_nascita_int1" value="" id="luogo_nascita_int1">


<div id="divProvincieComuni1">

<div class="tab1">Provincia*</div>
<div class="tab2">

<select id="provincia_nascita_int1"	name="provincia_nascita_int1" onchange="javascript:updateComuni('divComune1',this,'comune_luogo_nascita_int1','1id_luogo_nascita_int1','no', 1, 'ANAGRAFICA');">
	
	


<option value="" selected="selected">- Seleziona -</option>
<option value="AG">AG</option>
<option value="AL">AL</option>
<option value="AN">AN</option>
<option value="AO">AO</option>
<option value="AP">AP</option>
<option value="AQ">AQ</option>
<option value="AR">AR</option>

<option value="AT">AT</option>
<option value="AV">AV</option>
<option value="BA">BA</option>
<option value="BG">BG</option>
<option value="BI">BI</option>
<option value="BL">BL</option>
<option value="BN">BN</option>
<option value="BO">BO</option>
<option value="BR">BR</option>

<option value="BS">BS</option>
<option value="BZ">BZ</option>
<option value="CA">CA</option>
<option value="CB">CB</option>
<option value="CE">CE</option>
<option value="CH">CH</option>
<option value="CI">CI</option>
<option value="CL">CL</option>
<option value="CN">CN</option>

<option value="CO">CO</option>
<option value="CR">CR</option>
<option value="CS">CS</option>
<option value="CT">CT</option>
<option value="CZ">CZ</option>
<option value="EN">EN</option>
<option value="FC">FC</option>
<option value="FE">FE</option>
<option value="FG">FG</option>

<option value="FI">FI</option>
<option value="FR">FR</option>
<option value="GE">GE</option>
<option value="GO">GO</option>
<option value="GR">GR</option>
<option value="IM">IM</option>
<option value="IS">IS</option>
<option value="KR">KR</option>
<option value="LC">LC</option>

<option value="LE">LE</option>
<option value="LI">LI</option>
<option value="LO">LO</option>
<option value="LT">LT</option>
<option value="LU">LU</option>
<option value="MC">MC</option>
<option value="ME">ME</option>
<option value="MI">MI</option>
<option value="MN">MN</option>

<option value="MO">MO</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="NA">NA</option>
<option value="NO">NO</option>
<option value="NU">NU</option>
<option value="OG">OG</option>
<option value="OR">OR</option>
<option value="OT">OT</option>

<option value="PA">PA</option>
<option value="PC">PC</option>
<option value="PD">PD</option>
<option value="PE">PE</option>
<option value="PG">PG</option>
<option value="PI">PI</option>
<option value="PN">PN</option>
<option value="PO">PO</option>
<option value="PR">PR</option>

<option value="PT">PT</option>
<option value="PU">PU</option>
<option value="PV">PV</option>
<option value="PZ">PZ</option>
<option value="RA">RA</option>
<option value="RC">RC</option>
<option value="RE">RE</option>
<option value="RG">RG</option>
<option value="RI">RI</option>

<option value="RM">RM</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="SA">SA</option>
<option value="SI">SI</option>
<option value="SO">SO</option>
<option value="SP">SP</option>
<option value="SR">SR</option>
<option value="SS">SS</option>

<option value="SV">SV</option>
<option value="TA">TA</option>
<option value="TE">TE</option>
<option value="TN">TN</option>
<option value="TO">TO</option>
<option value="TP">TP</option>
<option value="TR">TR</option>
<option value="TS">TS</option>
<option value="TV">TV</option>

<option value="UD">UD</option>
<option value="VA">VA</option>
<option value="VB">VB</option>
<option value="VC">VC</option>
<option value="VE">VE</option>
<option value="VI">VI</option>
<option value="VR">VR</option>
<option value="VS">VS</option>
<option value="VT">VT</option>

<option value="VV">VV</option>
<option value=""></option>

</select> 

</div>

<div class="tab3">Comune*</div>
<div class="tab4">
<div id="divComune1">
<select id="1id_luogo_nascita_int1"	name="comune_luogo_nascita_int1" onchange="javascript:adjustVal(1, 'ANAGRAFICA');">
	<option value="">- Seleziona -</option>
</select> 


</div>

</div>

</div>




<div class="clear"></div>

<div id="divStato1" style="position:static; visibility: hidden; display:none">

	<div class="tab1">Stato*</div>
	<div class="tab2">
		<select id="2id_luogo_nascita_int1"	name="stato_luogo_nascita_int1" onchange="javascript:adjustVal(1, 'ANAGRAFICA');">

			


<option value="">- Seleziona -</option>
<option value="ABU DHABI">ABU DHABI</option>
<option value="AFGHANISTAN">AFGHANISTAN</option>
<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
<option value="AJMAN">AJMAN</option>
<option value="ALBANIA">ALBANIA</option>
<option value="ALGERIA">ALGERIA</option>

<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
<option value="ANDORRA">ANDORRA</option>
<option value="ANGOLA">ANGOLA</option>
<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
<option value="APOLIDE">APOLIDE</option>
<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
<option value="ARGENTINA">ARGENTINA</option>

<option value="ARMENIA">ARMENIA</option>
<option value="ARUBA">ARUBA</option>
<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
<option value="AUSTRALIA">AUSTRALIA</option>
<option value="AUSTRIA">AUSTRIA</option>
<option value="AZERBAIGIAN">AZERBAIGIAN</option>
<option value="BAHAMA">BAHAMA</option>
<option value="BAHREIN">BAHREIN</option>
<option value="BANGLADESH">BANGLADESH</option>

<option value="BARBADOS">BARBADOS</option>
<option value="BELGIO">BELGIO</option>
<option value="BELIZE">BELIZE</option>
<option value="BENIN">BENIN</option>
<option value="BERMUDA">BERMUDA</option>
<option value="BHUTAN">BHUTAN</option>
<option value="BIELORUSSIA">BIELORUSSIA</option>
<option value="BOLIVIA">BOLIVIA</option>
<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>

<option value="BOTSWANA">BOTSWANA</option>
<option value="BRASILE">BRASILE</option>
<option value="BRUNEI">BRUNEI</option>
<option value="BULGARIA">BULGARIA</option>
<option value="BURKINA FASO">BURKINA FASO</option>
<option value="BURUNDI">BURUNDI</option>
<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
<option value="CAMERUN">CAMERUN</option>
<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>

<option value="CANADA">CANADA</option>
<option value="CAPO VERDE">CAPO VERDE</option>
<option value="CAYMAN">CAYMAN</option>
<option value="CIAD">CIAD</option>
<option value="CILE">CILE</option>
<option value="CIPRO">CIPRO</option>
<option value="COLOMBIA">COLOMBIA</option>
<option value="COMORE ISOLE">COMORE ISOLE</option>
<option value="CONGO">CONGO</option>

<option value="COREA DEL NORD">COREA DEL NORD</option>
<option value="COREA DEL SUD">COREA DEL SUD</option>
<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
<option value="COSTARICA">COSTARICA</option>
<option value="CROAZIA">CROAZIA</option>
<option value="CUBA">CUBA</option>
<option value="DANIMARCA">DANIMARCA</option>
<option value="DOMINICA">DOMINICA</option>
<option value="DUBAI">DUBAI</option>

<option value="ECUADOR">ECUADOR</option>
<option value="EGITTO">EGITTO</option>
<option value="EL SALVADOR">EL SALVADOR</option>
<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
<option value="ERITREA">ERITREA</option>
<option value="ESTONIA">ESTONIA</option>
<option value="ETIOPIA">ETIOPIA</option>
<option value="FAR OER ISOLE">FAR OER ISOLE</option>
<option value="FILIPPINE">FILIPPINE</option>

<option value="FINLANDIA">FINLANDIA</option>
<option value="FRANCIA">FRANCIA</option>
<option value="FUIJAYRAH">FUIJAYRAH</option>
<option value="GABON">GABON</option>
<option value="GAMBIA">GAMBIA</option>
<option value="GEORGIA">GEORGIA</option>
<option value="GERMANIA">GERMANIA</option>
<option value="GHANA">GHANA</option>
<option value="GIAMAICA">GIAMAICA</option>

<option value="GIAPPONE">GIAPPONE</option>
<option value="GIBILTERRA">GIBILTERRA</option>
<option value="GIBUTI">GIBUTI</option>
<option value="GIORDANIA">GIORDANIA</option>
<option value="GRECIA">GRECIA</option>
<option value="GRENADA">GRENADA</option>
<option value="GROENLANDIA">GROENLANDIA</option>
<option value="GUADALUPA">GUADALUPA</option>
<option value="GUATEMALA">GUATEMALA</option>

<option value="GUERNSEY">GUERNSEY</option>
<option value="GUINEA">GUINEA</option>
<option value="GUINEA BISSAU">GUINEA BISSAU</option>
<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
<option value="GUYANA">GUYANA</option>
<option value="HAITI">HAITI</option>
<option value="HONDURAS">HONDURAS</option>
<option value="HONG KONG">HONG KONG</option>
<option value="INDIA">INDIA</option>

<option value="INDONESIA">INDONESIA</option>
<option value="IRAN">IRAN</option>
<option value="IRAQ">IRAQ</option>
<option value="IRLANDA">IRLANDA</option>
<option value="ISLANDA">ISLANDA</option>
<option value="ISOLE CILENE">ISOLE CILENE</option>
<option value="ISOLE FIGI">ISOLE FIGI</option>
<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
<option value="ISRAELE">ISRAELE</option>

<option value="IUGOSLAVIA">IUGOSLAVIA</option>
<option value="JERSEY">JERSEY</option>
<option value="KAZAKISTAN">KAZAKISTAN</option>
<option value="KENYA">KENYA</option>
<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
<option value="KIRIBATI">KIRIBATI</option>
<option value="KUWAIT">KUWAIT</option>
<option value="LAOS">LAOS</option>
<option value="LESOTHO">LESOTHO</option>

<option value="LETTONIA">LETTONIA</option>
<option value="LIBANO">LIBANO</option>
<option value="LIBERIA">LIBERIA</option>
<option value="LIBIA">LIBIA</option>
<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
<option value="LITUANIA">LITUANIA</option>
<option value="LUSSEMBURGO">LUSSEMBURGO</option>
<option value="MACEDONIA">MACEDONIA</option>
<option value="MADAGASCAR">MADAGASCAR</option>

<option value="MALAWI">MALAWI</option>
<option value="MALAYSIA">MALAYSIA</option>
<option value="MALDIVE">MALDIVE</option>
<option value="MALI">MALI</option>
<option value="MALTA">MALTA</option>
<option value="MAN ISOLA">MAN ISOLA</option>
<option value="MAROCCO">MAROCCO</option>
<option value="MARTINICA">MARTINICA</option>
<option value="MAURITANIA">MAURITANIA</option>

<option value="MAURITIUS">MAURITIUS</option>
<option value="MESSICO">MESSICO</option>
<option value="MOLDAVIA">MOLDAVIA</option>
<option value="MONGOLIA">MONGOLIA</option>
<option value="MONTENEGRO">MONTENEGRO</option>
<option value="MOZAMBICO">MOZAMBICO</option>
<option value="N.C.">N.C.</option>
<option value="NAMIBIA">NAMIBIA</option>
<option value="NAURU">NAURU</option>

<option value="NEPAL">NEPAL</option>
<option value="NICARAGUA">NICARAGUA</option>
<option value="NIGER">NIGER</option>
<option value="NIGERIA">NIGERIA</option>
<option value="NORVEGIA">NORVEGIA</option>
<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>

<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
<option value="OLANDA">OLANDA</option>
<option value="OMAN">OMAN</option>
<option value="PAKISTAN">PAKISTAN</option>
<option value="PANAMA">PANAMA</option>
<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
<option value="PARAGUAY">PARAGUAY</option>

<option value="PERU' ">PERU' </option>
<option value="POLONIA">POLONIA</option>
<option value="PORTOGALLO">PORTOGALLO</option>
<option value="PORTORICO">PORTORICO</option>
<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
<option value="QATAR">QATAR</option>
<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
<option value="REGNO UNITO">REGNO UNITO</option>

<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
<option value="REPUBLICA CENTRAFRICANA">REPUBLICA CENTRAFRICANA</option>
<option value="REUNION">REUNION</option>
<option value="ROMANIA">ROMANIA</option>

<option value="RUSSIA">RUSSIA</option>
<option value="RWANDA">RWANDA</option>
<option value="SAINT LUCIA">SAINT LUCIA</option>
<option value="SAINT VINCENT E GRENADINE">SAINT VINCENT E GRENADINE</option>
<option value="SALOMONE">SALOMONE</option>
<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
<option value="SAN MARINO">SAN MARINO</option>
<option value="SANT'ELENA">SANT'ELENA</option>
<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>

<option value="SENEGAL">SENEGAL</option>
<option value="SERBIA">SERBIA</option>
<option value="SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
<option value="SEYCHELLES">SEYCHELLES</option>
<option value="SHARJAH">SHARJAH</option>
<option value="SIERRA LEONE">SIERRA LEONE</option>
<option value="SINGAPORE">SINGAPORE</option>
<option value="SIRIA">SIRIA</option>
<option value="SLOVENIA">SLOVENIA</option>

<option value="SOMALIA">SOMALIA</option>
<option value="SPAGNA">SPAGNA</option>
<option value="SRI LANKA">SRI LANKA</option>
<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
<option value="SUDAN">SUDAN</option>
<option value="SURINAME">SURINAME</option>
<option value="SVEZIA">SVEZIA</option>
<option value="SVIZZERA">SVIZZERA</option>
<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>

<option value="TAGIKISTAN">TAGIKISTAN</option>
<option value="TANZANIA">TANZANIA</option>
<option value="TERRIT. BRITANNICO OC. INDIAN">TERRIT. BRITANNICO OC. INDIAN</option>
<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
<option value="THAILANDIA">THAILANDIA</option>
<option value="TOGO">TOGO</option>
<option value="TONGA">TONGA</option>
<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
<option value="TUNISIA">TUNISIA</option>

<option value="TURCHIA">TURCHIA</option>
<option value="TURKMENISTAN">TURKMENISTAN</option>
<option value="TURKS E CAICOS">TURKS E CAICOS</option>
<option value="TUVALU' ">TUVALU' </option>
<option value="UCRAINA">UCRAINA</option>
<option value="UGANDA">UGANDA</option>
<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
<option value="UNGHERIA">UNGHERIA</option>
<option value="UNIONE FEDERALE BIRMANA">UNIONE FEDERALE BIRMANA</option>

<option value="URUGUAY">URUGUAY</option>
<option value="UZBEKISTAN">UZBEKISTAN</option>
<option value="VANUATU">VANUATU</option>
<option value="VENEZUELA">VENEZUELA</option>
<option value="VERGINI AMERICANE ISOLE">VERGINI AMERICANE ISOLE</option>
<option value="VERGINI BRITANNICHE ISOLE">VERGINI BRITANNICHE ISOLE</option>
<option value="VIETNAM">VIETNAM</option>
<option value="YEMEN">YEMEN</option>
<option value="YEMEN MERIDIONALE">YEMEN MERIDIONALE</option>

<option value="ZAIRE">ZAIRE</option>
<option value="ZAMBIA">ZAMBIA</option>
<option value="ZIMBABWE">ZIMBABWE</option>

		</select> 
	</div>
	
	 
	
	<div class="tab3">Cittadinanza*</div>
	
	<div class="tab4">
		<select id="cittadinanza_int1" name="cittadinanza_int1" >

			


<option value="">- Seleziona -</option>
<option value="ABU DHABI">ABU DHABI</option>
<option value="AFGHANISTAN">AFGHANISTAN</option>
<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
<option value="AJMAN">AJMAN</option>
<option value="ALBANIA">ALBANIA</option>
<option value="ALGERIA">ALGERIA</option>

<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
<option value="ANDORRA">ANDORRA</option>
<option value="ANGOLA">ANGOLA</option>
<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
<option value="APOLIDE">APOLIDE</option>
<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
<option value="ARGENTINA">ARGENTINA</option>

<option value="ARMENIA">ARMENIA</option>
<option value="ARUBA">ARUBA</option>
<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
<option value="AUSTRALIA">AUSTRALIA</option>
<option value="AUSTRIA">AUSTRIA</option>
<option value="AZERBAIGIAN">AZERBAIGIAN</option>
<option value="BAHAMA">BAHAMA</option>
<option value="BAHREIN">BAHREIN</option>
<option value="BANGLADESH">BANGLADESH</option>

<option value="BARBADOS">BARBADOS</option>
<option value="BELGIO">BELGIO</option>
<option value="BELIZE">BELIZE</option>
<option value="BENIN">BENIN</option>
<option value="BERMUDA">BERMUDA</option>
<option value="BHUTAN">BHUTAN</option>
<option value="BIELORUSSIA">BIELORUSSIA</option>
<option value="BOLIVIA">BOLIVIA</option>
<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>

<option value="BOTSWANA">BOTSWANA</option>
<option value="BRASILE">BRASILE</option>
<option value="BRUNEI">BRUNEI</option>
<option value="BULGARIA">BULGARIA</option>
<option value="BURKINA FASO">BURKINA FASO</option>
<option value="BURUNDI">BURUNDI</option>
<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
<option value="CAMERUN">CAMERUN</option>
<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>

<option value="CANADA">CANADA</option>
<option value="CAPO VERDE">CAPO VERDE</option>
<option value="CAYMAN">CAYMAN</option>
<option value="CIAD">CIAD</option>
<option value="CILE">CILE</option>
<option value="CIPRO">CIPRO</option>
<option value="COLOMBIA">COLOMBIA</option>
<option value="COMORE ISOLE">COMORE ISOLE</option>
<option value="CONGO">CONGO</option>

<option value="COREA DEL NORD">COREA DEL NORD</option>
<option value="COREA DEL SUD">COREA DEL SUD</option>
<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
<option value="COSTARICA">COSTARICA</option>
<option value="CROAZIA">CROAZIA</option>
<option value="CUBA">CUBA</option>
<option value="DANIMARCA">DANIMARCA</option>
<option value="DOMINICA">DOMINICA</option>
<option value="DUBAI">DUBAI</option>

<option value="ECUADOR">ECUADOR</option>
<option value="EGITTO">EGITTO</option>
<option value="EL SALVADOR">EL SALVADOR</option>
<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
<option value="ERITREA">ERITREA</option>
<option value="ESTONIA">ESTONIA</option>
<option value="ETIOPIA">ETIOPIA</option>
<option value="FAR OER ISOLE">FAR OER ISOLE</option>
<option value="FILIPPINE">FILIPPINE</option>

<option value="FINLANDIA">FINLANDIA</option>
<option value="FRANCIA">FRANCIA</option>
<option value="FUIJAYRAH">FUIJAYRAH</option>
<option value="GABON">GABON</option>
<option value="GAMBIA">GAMBIA</option>
<option value="GEORGIA">GEORGIA</option>
<option value="GERMANIA">GERMANIA</option>
<option value="GHANA">GHANA</option>
<option value="GIAMAICA">GIAMAICA</option>

<option value="GIAPPONE">GIAPPONE</option>
<option value="GIBILTERRA">GIBILTERRA</option>
<option value="GIBUTI">GIBUTI</option>
<option value="GIORDANIA">GIORDANIA</option>
<option value="GRECIA">GRECIA</option>
<option value="GRENADA">GRENADA</option>
<option value="GROENLANDIA">GROENLANDIA</option>
<option value="GUADALUPA">GUADALUPA</option>
<option value="GUATEMALA">GUATEMALA</option>

<option value="GUERNSEY">GUERNSEY</option>
<option value="GUINEA">GUINEA</option>
<option value="GUINEA BISSAU">GUINEA BISSAU</option>
<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
<option value="GUYANA">GUYANA</option>
<option value="HAITI">HAITI</option>
<option value="HONDURAS">HONDURAS</option>
<option value="HONG KONG">HONG KONG</option>
<option value="INDIA">INDIA</option>

<option value="INDONESIA">INDONESIA</option>
<option value="IRAN">IRAN</option>
<option value="IRAQ">IRAQ</option>
<option value="IRLANDA">IRLANDA</option>
<option value="ISLANDA">ISLANDA</option>
<option value="ISOLE CILENE">ISOLE CILENE</option>
<option value="ISOLE FIGI">ISOLE FIGI</option>
<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
<option value="ISRAELE">ISRAELE</option>

<option value="ITALIA">ITALIA</option>
<option value="IUGOSLAVIA">IUGOSLAVIA</option>
<option value="JERSEY">JERSEY</option>
<option value="KAZAKISTAN">KAZAKISTAN</option>
<option value="KENYA">KENYA</option>
<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
<option value="KIRIBATI">KIRIBATI</option>
<option value="KUWAIT">KUWAIT</option>
<option value="LAOS">LAOS</option>

<option value="LESOTHO">LESOTHO</option>
<option value="LETTONIA">LETTONIA</option>
<option value="LIBANO">LIBANO</option>
<option value="LIBERIA">LIBERIA</option>
<option value="LIBIA">LIBIA</option>
<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
<option value="LITUANIA">LITUANIA</option>
<option value="LUSSEMBURGO">LUSSEMBURGO</option>
<option value="MACEDONIA">MACEDONIA</option>

<option value="MADAGASCAR">MADAGASCAR</option>
<option value="MALAWI">MALAWI</option>
<option value="MALAYSIA">MALAYSIA</option>
<option value="MALDIVE">MALDIVE</option>
<option value="MALI">MALI</option>
<option value="MALTA">MALTA</option>
<option value="MAN ISOLA">MAN ISOLA</option>
<option value="MAROCCO">MAROCCO</option>
<option value="MARTINICA">MARTINICA</option>

<option value="MAURITANIA">MAURITANIA</option>
<option value="MAURITIUS">MAURITIUS</option>
<option value="MESSICO">MESSICO</option>
<option value="MOLDAVIA">MOLDAVIA</option>
<option value="MONGOLIA">MONGOLIA</option>
<option value="MONTENEGRO">MONTENEGRO</option>
<option value="MOZAMBICO">MOZAMBICO</option>
<option value="N.C.">N.C.</option>
<option value="NAMIBIA">NAMIBIA</option>

<option value="NAURU">NAURU</option>
<option value="NEPAL">NEPAL</option>
<option value="NICARAGUA">NICARAGUA</option>
<option value="NIGER">NIGER</option>
<option value="NIGERIA">NIGERIA</option>
<option value="NORVEGIA">NORVEGIA</option>
<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>

<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
<option value="OLANDA">OLANDA</option>
<option value="OMAN">OMAN</option>
<option value="PAKISTAN">PAKISTAN</option>
<option value="PANAMA">PANAMA</option>
<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>

<option value="PARAGUAY">PARAGUAY</option>
<option value="PERU' ">PERU' </option>
<option value="POLONIA">POLONIA</option>
<option value="PORTOGALLO">PORTOGALLO</option>
<option value="PORTORICO">PORTORICO</option>
<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
<option value="QATAR">QATAR</option>
<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>

<option value="REGNO UNITO">REGNO UNITO</option>
<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
<option value="REPUBLICA CENTRAFRICANA">REPUBLICA CENTRAFRICANA</option>
<option value="REUNION">REUNION</option>

<option value="ROMANIA">ROMANIA</option>
<option value="RUSSIA">RUSSIA</option>
<option value="RWANDA">RWANDA</option>
<option value="SAINT LUCIA">SAINT LUCIA</option>
<option value="SAINT VINCENT E GRENADINE">SAINT VINCENT E GRENADINE</option>
<option value="SALOMONE">SALOMONE</option>
<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
<option value="SAN MARINO">SAN MARINO</option>
<option value="SANT'ELENA">SANT'ELENA</option>

<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
<option value="SENEGAL">SENEGAL</option>
<option value="SERBIA">SERBIA</option>
<option value="SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
<option value="SEYCHELLES">SEYCHELLES</option>
<option value="SHARJAH">SHARJAH</option>
<option value="SIERRA LEONE">SIERRA LEONE</option>
<option value="SINGAPORE">SINGAPORE</option>
<option value="SIRIA">SIRIA</option>

<option value="SLOVENIA">SLOVENIA</option>
<option value="SOMALIA">SOMALIA</option>
<option value="SPAGNA">SPAGNA</option>
<option value="SRI LANKA">SRI LANKA</option>
<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
<option value="SUDAN">SUDAN</option>
<option value="SURINAME">SURINAME</option>
<option value="SVEZIA">SVEZIA</option>
<option value="SVIZZERA">SVIZZERA</option>

<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
<option value="TAGIKISTAN">TAGIKISTAN</option>
<option value="TANZANIA">TANZANIA</option>
<option value="TERRIT. BRITANNICO OC. INDIAN">TERRIT. BRITANNICO OC. INDIAN</option>
<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
<option value="THAILANDIA">THAILANDIA</option>
<option value="TOGO">TOGO</option>
<option value="TONGA">TONGA</option>
<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>

<option value="TUNISIA">TUNISIA</option>
<option value="TURCHIA">TURCHIA</option>
<option value="TURKMENISTAN">TURKMENISTAN</option>
<option value="TURKS E CAICOS">TURKS E CAICOS</option>
<option value="TUVALU' ">TUVALU' </option>
<option value="UCRAINA">UCRAINA</option>
<option value="UGANDA">UGANDA</option>
<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
<option value="UNGHERIA">UNGHERIA</option>

<option value="UNIONE FEDERALE BIRMANA">UNIONE FEDERALE BIRMANA</option>
<option value="URUGUAY">URUGUAY</option>
<option value="UZBEKISTAN">UZBEKISTAN</option>
<option value="VANUATU">VANUATU</option>
<option value="VENEZUELA">VENEZUELA</option>
<option value="VERGINI AMERICANE ISOLE">VERGINI AMERICANE ISOLE</option>
<option value="VERGINI BRITANNICHE ISOLE">VERGINI BRITANNICHE ISOLE</option>
<option value="VIETNAM">VIETNAM</option>
<option value="YEMEN">YEMEN</option>

<option value="YEMEN MERIDIONALE">YEMEN MERIDIONALE</option>
<option value="ZAIRE">ZAIRE</option>
<option value="ZAMBIA">ZAMBIA</option>
<option value="ZIMBABWE">ZIMBABWE</option>

		</select>
	</div>
	
	

</div>
 	<script type="text/javascript">
		//sostituisco l'onload
		estero(1);
	</script> 


<div class="clear"></div>


<div class="clear"></div>
<div class="sep"></div>


<h3>INDIRIZZO DI RESIDENZA</h3>
<div class="tab1">Via/piazza*</div>
<div class="tab2">
	<input type="text" name="via_int1" size="20" value="">
</div>
<div class="tab3">Numero civico*</div>

<div class="tab4">
	<input type="text" name="civico_int1" maxlength="8" size="8" value="">&nbsp;&nbsp;&nbsp;&nbsp; CAP* <input type="text" name="cap_int1" maxlength="5" size="5" value="">
</div>
<div class="clear"></div>

<div class="tab1">Provincia*</div>
<div class="tab2">

<select id="provincia_int1" name="provincia_int1" class="inputStep2"  onchange="javascript:updateComuni('divComuneRes1',this,'comune_int1','comune_int1','yes', 1, 'NONE');">
	
	


<option value="" selected="selected">- Seleziona -</option>
<option value="AG">AG</option>

<option value="AL">AL</option>
<option value="AN">AN</option>
<option value="AO">AO</option>
<option value="AP">AP</option>
<option value="AQ">AQ</option>
<option value="AR">AR</option>
<option value="AT">AT</option>
<option value="AV">AV</option>
<option value="BA">BA</option>

<option value="BG">BG</option>
<option value="BI">BI</option>
<option value="BL">BL</option>
<option value="BN">BN</option>
<option value="BO">BO</option>
<option value="BR">BR</option>
<option value="BS">BS</option>
<option value="BZ">BZ</option>
<option value="CA">CA</option>

<option value="CB">CB</option>
<option value="CE">CE</option>
<option value="CH">CH</option>
<option value="CI">CI</option>
<option value="CL">CL</option>
<option value="CN">CN</option>
<option value="CO">CO</option>
<option value="CR">CR</option>
<option value="CS">CS</option>

<option value="CT">CT</option>
<option value="CZ">CZ</option>
<option value="EN">EN</option>
<option value="FC">FC</option>
<option value="FE">FE</option>
<option value="FG">FG</option>
<option value="FI">FI</option>
<option value="FR">FR</option>
<option value="GE">GE</option>

<option value="GO">GO</option>
<option value="GR">GR</option>
<option value="IM">IM</option>
<option value="IS">IS</option>
<option value="KR">KR</option>
<option value="LC">LC</option>
<option value="LE">LE</option>
<option value="LI">LI</option>
<option value="LO">LO</option>

<option value="LT">LT</option>
<option value="LU">LU</option>
<option value="MC">MC</option>
<option value="ME">ME</option>
<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MO">MO</option>
<option value="MS">MS</option>
<option value="MT">MT</option>

<option value="NA">NA</option>
<option value="NO">NO</option>
<option value="NU">NU</option>
<option value="OG">OG</option>
<option value="OR">OR</option>
<option value="OT">OT</option>
<option value="PA">PA</option>
<option value="PC">PC</option>
<option value="PD">PD</option>

<option value="PE">PE</option>
<option value="PG">PG</option>
<option value="PI">PI</option>
<option value="PN">PN</option>
<option value="PO">PO</option>
<option value="PR">PR</option>
<option value="PT">PT</option>
<option value="PU">PU</option>
<option value="PV">PV</option>

<option value="PZ">PZ</option>
<option value="RA">RA</option>
<option value="RC">RC</option>
<option value="RE">RE</option>
<option value="RG">RG</option>
<option value="RI">RI</option>
<option value="RM">RM</option>
<option value="RN">RN</option>
<option value="RO">RO</option>

<option value="SA">SA</option>
<option value="SI">SI</option>
<option value="SO">SO</option>
<option value="SP">SP</option>
<option value="SR">SR</option>
<option value="SS">SS</option>
<option value="SV">SV</option>
<option value="TA">TA</option>
<option value="TE">TE</option>

<option value="TN">TN</option>
<option value="TO">TO</option>
<option value="TP">TP</option>
<option value="TR">TR</option>
<option value="TS">TS</option>
<option value="TV">TV</option>
<option value="UD">UD</option>
<option value="VA">VA</option>
<option value="VB">VB</option>

<option value="VC">VC</option>
<option value="VE">VE</option>
<option value="VI">VI</option>
<option value="VR">VR</option>
<option value="VS">VS</option>
<option value="VT">VT</option>
<option value="VV">VV</option>
<option value=""></option>

</select> 

 

</div>

<div class="tab3">Comune*</div>


<div class="tab4">

<div id="divComuneRes1">
	<select id="comune_int1"	name="comune_int1" >
		<option value="">- Seleziona -</option>
	</select> 
</div>

</div>



<div class="clear"></div>
<div class="sep"></div>

<h3>INDIRIZZO PER LA CORRISPONDENZA</h3>

<p>		
	<a href="javascript:;" onclick="javascript: switchConditionalData('CorrispondenzaInt1', 'image1', '/img/ret/');" class="dataSwitch"><img src="/img/ret/ico1gr_indAOLchiuso.gif" id="image1"></a>Aggiungi indirizzo se diverso da quello di residenza.
	<br>Se compilato, a questo indirizzo verrà inviata la documentazione contrattuale, per tutti gli intestatari del conto.
</p>
			  
<div id="CorrispondenzaInt1" style="display: none;">

	<div class="tab1">Via/piazza</div>
	<div class="tab2">
		<input type="text" name="via_recapito_int1" value=""></div>
	<div class="tab3">Numero civico</div>
	
	<div class="tab4">
		<input type="text" name="civico_recapito_int1" maxlength="8" size="8" value="">&nbsp;&nbsp;&nbsp;&nbsp; CAP 
		<input type="text" name="cap_recapito_int1" maxlength="5" size="5" value="">
	</div>

	<div class="clear"></div>
	<div class="tab1">Provincia</div>
	<div class="tab2">
		<select id="provincia_recapito_int1" name="provincia_recapito_int1"  onchange="javascript:updateComuni('divComuneCor1',this,'comune_recapito_int1','comune_recapito_int1','yes', 1, 'NONE');">
			
			


<option value="" selected="selected">- Seleziona -</option>
<option value="AG">AG</option>
<option value="AL">AL</option>
<option value="AN">AN</option>

<option value="AO">AO</option>
<option value="AP">AP</option>
<option value="AQ">AQ</option>
<option value="AR">AR</option>
<option value="AT">AT</option>
<option value="AV">AV</option>
<option value="BA">BA</option>
<option value="BG">BG</option>
<option value="BI">BI</option>

<option value="BL">BL</option>
<option value="BN">BN</option>
<option value="BO">BO</option>
<option value="BR">BR</option>
<option value="BS">BS</option>
<option value="BZ">BZ</option>
<option value="CA">CA</option>
<option value="CB">CB</option>
<option value="CE">CE</option>

<option value="CH">CH</option>
<option value="CI">CI</option>
<option value="CL">CL</option>
<option value="CN">CN</option>
<option value="CO">CO</option>
<option value="CR">CR</option>
<option value="CS">CS</option>
<option value="CT">CT</option>
<option value="CZ">CZ</option>

<option value="EN">EN</option>
<option value="FC">FC</option>
<option value="FE">FE</option>
<option value="FG">FG</option>
<option value="FI">FI</option>
<option value="FR">FR</option>
<option value="GE">GE</option>
<option value="GO">GO</option>
<option value="GR">GR</option>

<option value="IM">IM</option>
<option value="IS">IS</option>
<option value="KR">KR</option>
<option value="LC">LC</option>
<option value="LE">LE</option>
<option value="LI">LI</option>
<option value="LO">LO</option>
<option value="LT">LT</option>
<option value="LU">LU</option>

<option value="MC">MC</option>
<option value="ME">ME</option>
<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MO">MO</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="NA">NA</option>
<option value="NO">NO</option>

<option value="NU">NU</option>
<option value="OG">OG</option>
<option value="OR">OR</option>
<option value="OT">OT</option>
<option value="PA">PA</option>
<option value="PC">PC</option>
<option value="PD">PD</option>
<option value="PE">PE</option>
<option value="PG">PG</option>

<option value="PI">PI</option>
<option value="PN">PN</option>
<option value="PO">PO</option>
<option value="PR">PR</option>
<option value="PT">PT</option>
<option value="PU">PU</option>
<option value="PV">PV</option>
<option value="PZ">PZ</option>
<option value="RA">RA</option>

<option value="RC">RC</option>
<option value="RE">RE</option>
<option value="RG">RG</option>
<option value="RI">RI</option>
<option value="RM">RM</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="SA">SA</option>
<option value="SI">SI</option>

<option value="SO">SO</option>
<option value="SP">SP</option>
<option value="SR">SR</option>
<option value="SS">SS</option>
<option value="SV">SV</option>
<option value="TA">TA</option>
<option value="TE">TE</option>
<option value="TN">TN</option>
<option value="TO">TO</option>

<option value="TP">TP</option>
<option value="TR">TR</option>
<option value="TS">TS</option>
<option value="TV">TV</option>
<option value="UD">UD</option>
<option value="VA">VA</option>
<option value="VB">VB</option>
<option value="VC">VC</option>
<option value="VE">VE</option>

<option value="VI">VI</option>
<option value="VR">VR</option>
<option value="VS">VS</option>
<option value="VT">VT</option>
<option value="VV">VV</option>
<option value=""></option>

		</select> 
	</div>
	
	
	
	<div class="tab3">Comune</div>

	<div class="tab4">
		<div id="divComuneCor1">
			<select id="comune_recapito_int1" name="comune_recapito_int1" >
				<option value="">- Seleziona -</option>
			</select> 
		</div>
	</div>
	
	

</div>
<div class="clear"></div>

<div class="sep"></div>


<h3>INDIRIZZO DA COMUNICARE AL CENTRO D'ALLARME INTERBANCARIA</h3>
<p>		
	<a href="javascript:;" onclick="javascript: switchConditionalData('interbancariaInt1', 'image2', '/img/ret/');" class="dataSwitch"><img src="/img/ret/ico1gr_indAOLchiuso.gif" id="image2"></a>Aggiungi indirizzo se diverso da quello di residenza
</p>
			  
<div id="interbancariaInt1" style="display: none;">
	<div class="tab1">Via/piazza</div>
	<div class="tab2">
		<input type="text" name="via_domicilioCAI_int1" value="">

	</div>
	<div class="tab3">Numero civico</div>
	<div class="tab4">
		<input type="text" name="civico_domicilioCAI_int1" maxlength="8" size="8" value="">&nbsp;&nbsp;&nbsp;&nbsp;CAP 
		<input type="text" name="cap_domicilioCAI_int1" maxlength="5" size="5" value="">
	</div>
	<div class="clear"></div>
	<div class="tab1">Provincia</div>

	<div class="tab2">
		<select id="provincia_domicilioCAI_int1" name="provincia_domicilioCAI_int1"  onchange="javascript:updateComuni('divComuneCai1',this,'comune_domicilioCAI_int1','comune_domicilioCAI_int1','yes', 1, 'NONE');">
		


<option value="" selected="selected">- Seleziona -</option>
<option value="AG">AG</option>
<option value="AL">AL</option>
<option value="AN">AN</option>
<option value="AO">AO</option>
<option value="AP">AP</option>

<option value="AQ">AQ</option>
<option value="AR">AR</option>
<option value="AT">AT</option>
<option value="AV">AV</option>
<option value="BA">BA</option>
<option value="BG">BG</option>
<option value="BI">BI</option>
<option value="BL">BL</option>
<option value="BN">BN</option>

<option value="BO">BO</option>
<option value="BR">BR</option>
<option value="BS">BS</option>
<option value="BZ">BZ</option>
<option value="CA">CA</option>
<option value="CB">CB</option>
<option value="CE">CE</option>
<option value="CH">CH</option>
<option value="CI">CI</option>

<option value="CL">CL</option>
<option value="CN">CN</option>
<option value="CO">CO</option>
<option value="CR">CR</option>
<option value="CS">CS</option>
<option value="CT">CT</option>
<option value="CZ">CZ</option>
<option value="EN">EN</option>
<option value="FC">FC</option>

<option value="FE">FE</option>
<option value="FG">FG</option>
<option value="FI">FI</option>
<option value="FR">FR</option>
<option value="GE">GE</option>
<option value="GO">GO</option>
<option value="GR">GR</option>
<option value="IM">IM</option>
<option value="IS">IS</option>

<option value="KR">KR</option>
<option value="LC">LC</option>
<option value="LE">LE</option>
<option value="LI">LI</option>
<option value="LO">LO</option>
<option value="LT">LT</option>
<option value="LU">LU</option>
<option value="MC">MC</option>
<option value="ME">ME</option>

<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MO">MO</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="NA">NA</option>
<option value="NO">NO</option>
<option value="NU">NU</option>
<option value="OG">OG</option>

<option value="OR">OR</option>
<option value="OT">OT</option>
<option value="PA">PA</option>
<option value="PC">PC</option>
<option value="PD">PD</option>
<option value="PE">PE</option>
<option value="PG">PG</option>
<option value="PI">PI</option>
<option value="PN">PN</option>

<option value="PO">PO</option>
<option value="PR">PR</option>
<option value="PT">PT</option>
<option value="PU">PU</option>
<option value="PV">PV</option>
<option value="PZ">PZ</option>
<option value="RA">RA</option>
<option value="RC">RC</option>
<option value="RE">RE</option>

<option value="RG">RG</option>
<option value="RI">RI</option>
<option value="RM">RM</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="SA">SA</option>
<option value="SI">SI</option>
<option value="SO">SO</option>
<option value="SP">SP</option>

<option value="SR">SR</option>
<option value="SS">SS</option>
<option value="SV">SV</option>
<option value="TA">TA</option>
<option value="TE">TE</option>
<option value="TN">TN</option>
<option value="TO">TO</option>
<option value="TP">TP</option>
<option value="TR">TR</option>

<option value="TS">TS</option>
<option value="TV">TV</option>
<option value="UD">UD</option>
<option value="VA">VA</option>
<option value="VB">VB</option>
<option value="VC">VC</option>
<option value="VE">VE</option>
<option value="VI">VI</option>
<option value="VR">VR</option>

<option value="VS">VS</option>
<option value="VT">VT</option>
<option value="VV">VV</option>
<option value=""></option>

	</select> 
	
		
	</div>
	<div class="tab3">Comune</div>
	<div class="tab4">
		<div id="divComuneCai1">

			<select id="comune_domicilioCAI_int1" name="comune_domicilioCAI_int1"  >
				<option value="">- Seleziona -</option>
			</select> 
		</div>
	</div>
	
	

</div>
<div class="clear"></div>
<div class="sep"></div>

<h3>RECAPITI TELEFONICI (UNO OBBLIGATORIO)</h3>

<div class="tab1">Telefono di casa</div>
<div class="tab2">
	<input type="text" name="prefisso_int1" maxlength="4" size="4" value="">
    <input type="text" name="telefono_int1" value="">
</div>
<input type="hidden" name="sito_tel_int1" value="Casa">

<div class="clear"></div>

<div class="tab1">Telefono dell'ufficio</div>
<div class="tab2">
	<input type="text" name="prefisso_2_int1" maxlength="4" size="4" value=""> 
	<input type="text" name="telefono_2_int1" value="">

</div>

<input type="hidden" name="sito_tel_2_int1" value="Ufficio">

<div class="clear"></div>

<div class="tab1">Cellulare*</div>
<div class="tab2">
	<input type="text" name="prefisso_3_int1" maxlength="3" size="4" value="349" disabled="disabled">
	<input type="text" name="telefono_3_int1" value="5555555" disabled="disabled">
</div>
<div class="tab3">Operatore*</div>
<div class="tab4">

	<select id="operatore_int1" name="operatore_int1" class="inputStep2 altri" disabled>
		<option value="">operatore</option>
		<option value="Tim">Tim</option>
		<option value="Vodafone">Vodafone</option>
		<option value="Wind">Wind</option>
		<option value="Tre">Tre</option>

		<option value="Altro">Altro</option>
	</select>
  
 	<script>
        	var obj = document.getElementById("operatore_int1");
        	obj.value = "Tim";
    </script> 
 
</div>
<input type="hidden" name="sito_tel_3_int1" value="Cellulare">

<div class="clear"></div>

<div class="tab1">Indirizzo e-mail*</div>
<div class="tab2">
	<input type="text" name="mail_int1" value="simona.monte@tiscali.it" disabled="disabled">

</div>
<div class="clear"></div>

<div class="sep"></div>

<h3>DATI PERSONALI</h3>
<div class="tab1">tipo documento*</div>
<div class="tab2long">
	<input type="radio" name="tipo_doc_int1" value="Carta d&#39;identità" onclick="emissione(document.aol.tipo_doc_int1,document.aol.emesso_da_int1);emissioneRilascitoDa('divRilComuneInt1', 'divRilPrefetturaInt1', 'divRilQuesturaInt1', this);" class="bgReset">Carta d'identità&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="radio" name="tipo_doc_int1" value="Patente" onclick="emissione(document.aol.tipo_doc_int1,document.aol.emesso_da_int1);emissioneRilascitoDa('divRilPrefetturaInt1', 'divRilComuneInt1', 'divRilQuesturaInt1', this);" class="bgReset"> Patente <span
	class="smallNote">(solo se rilasciata da prefettura)</span></div>

<div class="tab4">
	<input type="radio" name="tipo_doc_int1" value="Passaporto" onclick="emissione(document.aol.tipo_doc_int1,document.aol.emesso_da_int1);emissioneRilascitoDa('divRilQuesturaInt1', 'divRilComuneInt1', 'divRilPrefetturaInt1', this);" class="bgReset"> Passaporto
</div>
<div class="clear"></div>

<div class="tab1">Numero*</div>
<div class="tab2">
	<input type="text" name="numero_doc_int1" value="">
</div>
<input type="hidden" name="emesso_da_int1" value="">

<div class="clear"></div>

<div class="tab1">Rilasciato da
<div id="divRilComuneInt1" style="position:static; visibility: hidden; display:none">Comune di*</div>
<div id="divRilPrefetturaInt1" style="position:static; visibility: hidden; display:none">Prefettura di*</div>
<div id="divRilQuesturaInt1" style="position:static; visibility: hidden; display:none">Questura di*</div>
</div>

<script type="text/javascript">
		//sostituisco l'onload
		if (document.aol.tipo_doc_int1[0].checked){
			var campo = document.aol.tipo_doc_int1[0];
			emissioneRilascitoDa('divRilComuneInt1', 'divRilPrefetturaInt1', 'divRilQuesturaInt1', campo);
		}else if (document.aol.tipo_doc_int1[1].checked){
			var campo = document.aol.tipo_doc_int1[1];
			emissioneRilascitoDa('divRilPrefetturaInt1', 'divRilComuneInt1', 'divRilQuesturaInt1', campo);
		}else if(document.aol.tipo_doc_int1[2].checked) {//check 2
			var campo = document.aol.tipo_doc_int1[2];
			emissioneRilascitoDa('divRilQuesturaInt1', 'divRilComuneInt1', 'divRilPrefetturaInt1', campo);
		}
</script>


<div class="tab2">
	<input type="text" name="luogo_emissione_int1" value="" class="inputStep">
</div>

<div class="tab3">Provincia*</div>
<div class="tab4">
	<select id="provincia_emissione_int1" name="provincia_emissione_int1" class="inputStep2">
	


<option value="" selected="selected">- Seleziona -</option>
<option value="AG">AG</option>
<option value="AL">AL</option>
<option value="AN">AN</option>
<option value="AO">AO</option>
<option value="AP">AP</option>

<option value="AQ">AQ</option>
<option value="AR">AR</option>
<option value="AT">AT</option>
<option value="AV">AV</option>
<option value="BA">BA</option>
<option value="BG">BG</option>
<option value="BI">BI</option>
<option value="BL">BL</option>
<option value="BN">BN</option>

<option value="BO">BO</option>
<option value="BR">BR</option>
<option value="BS">BS</option>
<option value="BZ">BZ</option>
<option value="CA">CA</option>
<option value="CB">CB</option>
<option value="CE">CE</option>
<option value="CH">CH</option>
<option value="CI">CI</option>

<option value="CL">CL</option>
<option value="CN">CN</option>
<option value="CO">CO</option>
<option value="CR">CR</option>
<option value="CS">CS</option>
<option value="CT">CT</option>
<option value="CZ">CZ</option>
<option value="EN">EN</option>
<option value="FC">FC</option>

<option value="FE">FE</option>
<option value="FG">FG</option>
<option value="FI">FI</option>
<option value="FR">FR</option>
<option value="GE">GE</option>
<option value="GO">GO</option>
<option value="GR">GR</option>
<option value="IM">IM</option>
<option value="IS">IS</option>

<option value="KR">KR</option>
<option value="LC">LC</option>
<option value="LE">LE</option>
<option value="LI">LI</option>
<option value="LO">LO</option>
<option value="LT">LT</option>
<option value="LU">LU</option>
<option value="MC">MC</option>
<option value="ME">ME</option>

<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MO">MO</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="NA">NA</option>
<option value="NO">NO</option>
<option value="NU">NU</option>
<option value="OG">OG</option>

<option value="OR">OR</option>
<option value="OT">OT</option>
<option value="PA">PA</option>
<option value="PC">PC</option>
<option value="PD">PD</option>
<option value="PE">PE</option>
<option value="PG">PG</option>
<option value="PI">PI</option>
<option value="PN">PN</option>

<option value="PO">PO</option>
<option value="PR">PR</option>
<option value="PT">PT</option>
<option value="PU">PU</option>
<option value="PV">PV</option>
<option value="PZ">PZ</option>
<option value="RA">RA</option>
<option value="RC">RC</option>
<option value="RE">RE</option>

<option value="RG">RG</option>
<option value="RI">RI</option>
<option value="RM">RM</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="SA">SA</option>
<option value="SI">SI</option>
<option value="SO">SO</option>
<option value="SP">SP</option>

<option value="SR">SR</option>
<option value="SS">SS</option>
<option value="SV">SV</option>
<option value="TA">TA</option>
<option value="TE">TE</option>
<option value="TN">TN</option>
<option value="TO">TO</option>
<option value="TP">TP</option>
<option value="TR">TR</option>

<option value="TS">TS</option>
<option value="TV">TV</option>
<option value="UD">UD</option>
<option value="VA">VA</option>
<option value="VB">VB</option>
<option value="VC">VC</option>
<option value="VE">VE</option>
<option value="VI">VI</option>
<option value="VR">VR</option>

<option value="VS">VS</option>
<option value="VT">VT</option>
<option value="VV">VV</option>
<option value=""></option>

</select> 

</div>
<div class="clear"></div>

<div class="tab1">Data di rilascio
<div class="smallNote">(GG MM AAAA)*</div>
</div>
<div class="tab2">

	<input type="text" name="gg_emissione_int1" maxlength="2" size="2" value="" onkeyup="javascript:mySpostaFocus(this,document.aol.mm_emissione_int1,2);" onfocus="select();"> 
	<input type="text" name="mm_emissione_int1" maxlength="2" size="2" value="" onkeyup="javascript:mySpostaFocus(this,document.aol.aa_emissione_int1,2);" onfocus="select();"> 
	<input type="text" name="aa_emissione_int1" maxlength="4" size="4" value="" onfocus="select();">
	<script type="text/javascript">
	  	document.aol.gg_emissione_int1.setAttribute('autocomplete','off');
	</script>
</div>

<div class="clear"></div>

<div class="tab1">Professione*</div>
<div class="tab2">
<select id="professione_int1" name="professione_int1" class="inputStep2 altri">
	<option selected="selected">- Seleziona -</option>

	<option value="Dirigente/Manager">Dirigente/Manager</option>
	<option value="Impiegato">Impiegato</option>
	<option value="Imp. direttivo/quadro">Imp. direttivo/quadro</option>
	<option value="Operaio/Apprendista">Operaio/Apprendista</option>
	<option value="Medico/Paramedico">Medico/Paramedico</option>
	<option value="Artigiano/Commerciante">Artigiano/Commerciante</option>

	<option value="Libero Prof. (Avvocato /Ing.  etc)">Libero Prof. (Avvocato /Ing. etc)</option>
	<option value="Lavoratore in proprio">Lavoratore in proprio</option>
	<option value="Venditore/rappresentante">Venditore/rappresentante</option>
	<option value="Insegnante/Docente">Insegnante/Docente</option>
	<option value="Pensionato">Pensionato</option>
	<option value="Casalinga">Casalinga</option>

	<option value="Studente">Studente</option>
	<option value="In cerca di occupazione">In cerca di	occupazione</option>
</select> 
</div>

<div class="tab3">Settore*</div>
<div class="tab4">
<select name="settore_int1"><option value="">- seleziona -</option>
	<option value="Agricoltura">Agricoltura</option>

	<option value="Artigianato">Artigianato</option>
	<option value="Commercio">Commercio</option>
	<option value="Credito/Finanza">Credito/Finanza</option>
	<option value="Edilizia">Edilizia</option>
	<option value="Industria">Industria</option>
	<option value="Pubblica amministrazione/Difesa">Pubblica amministrazione/Difesa</option>

	<option value="Pubblica istruzione">Pubblica istruzione</option>
	<option value="Sanità">Sanità</option>
	<option value="Servizi">Servizi</option>
	<option value="Turismo">Turismo</option>
	<option value="Altro/Nessuno">Altro/Nessuno</option></select>

</div>

<div class="clear"></div>
<div class="tab1">Titolo di studio*</div>
<div class="tab2"><select id="titolo_studio_int1" name="titolo_studio_int1" class="inputStep2 altri">
	<option selected="selected">- Seleziona -</option>
	<option value="Laurea in discipline economiche">Laurea in discipline economiche</option>
	<option value="Laurea">Laurea</option>
	<option value="Diploma">Diploma</option>

	<option value="Licenza media">Licenza media</option>
	<option value="Licenza elementare">Licenza elementare</option>
	<option value="Nessuno">Nessuno</option>
</select> 
</div>
<div class="clear"></div>

<div class="tab1">Come hai conosciuto Webank?*</div>
<div class="tab2">
<select id="conoscenza" name="conoscenza" class="inputStep2 altri">

	<option selected="selected">- Seleziona -</option>
	<option value="Amici">Amici</option>
	<option value="Colleghi">Colleghi</option>
	<option value="Agenzia BPM">Agenzia BPM</option>
	<option value="Promotore Finanziario">Promotore Finanziario</option>
	<option value="TV">TV</option>	
	<option value="Internet">Internet</option>

	<option value="Stampa">Stampa</option>
	<option value="Radio">Radio</option>
	<option value="Motori di ricerca">Motori di ricerca</option>
	<option value="Altro">Altro</option>
</select> 

</div>
<div class="clear"></div>
<div class="sep"></div>



<h3>SEI GIA' CLIENTE WEBANK?</h3>
<p>
	Se dichiari di avere un rapporto bancario con Webank, verificheremo i dati con quelli nei nostri archivi. Se corrispondono, non dovrai fare il
	<a href="javascript:pop_up_int('/webankpub/wb/contents/attiva_conto/contoMe.jsp?BV_UseBVCookie=Yes', 'Modalit&agrave; di riconoscimento del cliente', 'small' );">riconoscimento</a> previsto dalla normativa antiriciclaggio
</p>

<p>
	<input type="checkbox" name="isbpmcliente_int1" value="SI" onclick="javascript:controlVisibility('isbpmcliente_int1','formTipoRapporto1');" id="isbpmcliente_int1"> S&igrave;, sono cliente Webank

</p>



<div id="formTipoRapporto1"  style="display: none;">
	<div id="formLabel1" class="tab3">N. conto corrente</div>
	<div class="tab4">
		<input type="text" name="cccliente_int1" maxlength="16" size="35" value="">
	</div>
	
	<!-- script che visualizza i campi nascosti nel tornare indietro, solo se compilati precedentemente -->
	<script type="text/javascript">
		if(document.aol.isbpmcliente_int1.checked){
			controlVisibility('isbpmcliente_int1', 'formTipoRapporto1');
		}
		if(document.aol.via_recapito_int1.value != "")
			switchConditionalData('CorrispondenzaInt1', 'image1', '/img/ret/');
		if(document.aol.via_domicilioCAI_int1.value != "")
			switchConditionalData('interbancariaInt1', 'image2', '/img/ret/');
	</script>

	<!-- fine script -->
	
</div>


</div> 
</div>

</div>
</div>

 



<div class="clear"></div>

<div id="buttonsOnLeft">
<div class="btnOut white">
<!--<a href="/webankpub/wb/2l/do/aol/wbwsPUaol0.do?BV_UseBVCookie=Yes&fromPageName=wsPUaol1.jsp&CNT_TARGET=Privati"
	title="Indietro">INDIETRO</a>-->
	<a href= "/connect.php?page=tpl_pub_aol.php" title="Avanti">INDIETRO</a>
	</div>

</div>

<div id="buttonsOnRight">

	<div class="btnOut">
		<a href="javascript:openAlert('salvaInBozza');" title="Salva in bozza">
			SALVA BOZZA
		</a>
	</div>

	<div class="btnOut">
		<!--<a href="javascript:valida(n,n, '/webankpub/aol/gppopUpHelpAol.do?BV_UseBVCookie=Yes', act, true)" title="Avanti">AVANTI</a>-->
		<a href= "/connect.php?page=tpl_pub_aol3.php" title="Avanti">AVANTI</a>
			
		
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




</form>

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


