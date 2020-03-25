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
		<h1>MODIFICA PASSWORD INIZIALE</h1>		
				<div class="box6">
				<div class="box6b">	
				Gentile cliente,<br />per motivi di sicurezza &egrave; necessario modificare la password iniziale di 5 cifre con un'altra di tua scelta.<br /><br />La nuova password deve avere le seguenti caratteristiche:
					<ul>
						<li>lunghezza minima 8 caratteri, massima 16 caratteri;</li>
						<li>utilizzare caratteri alfanumerici (deve essere presente almeno un carattere numerico);</li>
						<li>non utilizzare caratteri grafici (es.: - ? &amp; * ) o lettere accentate.</li>
					</ul>
				Riceverai una e-mail a conferma dell'avvenuta modifica.<br /><br /><br />
					<div class="modpasstit">Modifica password</div>
					<form action="">
					<div class="modpass">Password iniziale (di 5 cifre)</div>
					<div class="modpass"><input type="password" maxlength="106" size="20" name="VecchiaPassword" /></div>
					<div class="modpass2">Nuova password</div>
					<div class="modpass2"><input type="password" maxlength="106" size="20" name="NuovaPassword" /></div>
					<div class="modpass2">Conferma password</div>
					<div class="modpass2"><input type="password" maxlength="106" size="20" name="ConfermaPassword" /></div>
					<div class="lineabottone">
						<div class="bottone"><a href="#" title="#">conferma</a></div>
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
