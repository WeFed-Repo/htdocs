<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>Librerie <?php print $fullname; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<!-- INIZIO CODICE-->	
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<link href="/css/ret/priv_login.css" rel="stylesheet" type="text/css" media="screen" />
<?php virtual ("/js/include_js_priv.html"); ?>
<!-- FINE CODICE-->

</head>
<body>
<div class="page100">
	<div id="testa"> 
  <!-- INIZIO CODICE-->
    <?php virtual ("/librerie/include/commons/navigazione/nav_black_priv_001b.php"); ?>
    <!-- FINE CODICE-->
	</div>		
	<div id="content">		
		<div id="contenuti2">
		<h1>INFORMATIVA - OBBLIGAZIONI A BASSO RISCHIO/RENDIMENTO</h1>		
				<div class="box6">
				<div class="box6b">	
				Gentile cliente,<br />come sicuramente sapr&agrave;, Banca Popolare di Milano  e Banca di Legnano aderiscono a <strong>PattiChiari</strong>, l'iniziativa intrapresa dalle Banche per migliorare i rapporti con la clientela, improntandolo a principi di chiarezza e comprensibilit&agrave;.<br /><br />
Ulteriore passo dell'iniziativa &egrave; la disponibilit&agrave; di un <strong>elenco di obbligazioni a basso rischio/rendimento.</strong> Uno strumento studiato per misurare il rischio degli investimenti finanziari e orientare nella scelta di titoli semplici da valutare.<br /><br />
 <?php print $fullname; ?>
 ha previsto di conseguenza la possibilit&agrave; di utilizzare questo elenco come <strong>criterio di ricerca e scelta</strong> dei titoli, nel trading base, Trading Desk Push e Trading Desk PRO.<br /><br />
La invitiamo a prendere visione, sul sito <a href="http://www.pattichiari.it" target="_blank">PattiChiari</a>, di ulteriore materiale informativo in materia di obbligazioni a basso rischio.<BR>Dichiaro di aver preso visione della "
<a href="javascript:void(0)" onclick="javascript:window.open('http://bassorischio.pattichiari.it/guida/indice.htm'); void(0); open_pdf();">Guida Cliente - Obbligazioni a Basso Rischio/Rendimento</a>"<br /><br />				
					<form action="">
					Si <input type="radio" name="flag_si" value="0" />
					No <input type="radio" name="flag_si" value="1" />
					<br /><br />
					<div class="lineabottone">
						<div class="bottone"><a href="#" title="#">prosegui</a></div>
					</div>
					</form>
					<div class="vuoto"></div>
				</div>				
				</div>
		</div>	
	</div>
	
	<!-- INIZIO CODICE-->
    <?php virtual ("/librerie/include/commons/footer/foot_002b.php"); ?>
    <!-- FINE CODICE-->	
</div>
<iframe id="iframe" height="10" src="" frameborder="0" width="10" scrolling="no"></iframe>
</body>
</html>
