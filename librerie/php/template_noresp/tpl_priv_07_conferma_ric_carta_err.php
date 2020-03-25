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
		<h1>CONFERMA RICEZIONE CARTA SERVIZI TELEMATICI</h1>		
				<div class="box6">
				<div class="box6b">	
					<div class="msgerr">Attenzione! Il numero inserito non risulta corretto. Controlla e riprova.</div>
				Per <b>confermare l'avvenuta ricezione</b> della tua nuova Carta Servizi Telematici, inserisci il numero 
				identificativo stampato sulla lettera accampagnatoria inviata insieme alla Carta.<br /><br />
				<div class="modpasstit">Inserisci il numero identificativo</div>
					<form action="">
					<div class="modpassb">Numero identificativo</div>
					<div class="modpassb2"><input type="text" size="40" name="IndirizzoEmail" value="" /></div>					
					<div class="lineabottone">
						<div class="bottone"><a href="#" title="#">conferma</a></div>
						<div class="backbottone"><a href="#" title="#">annulla</a></div>
					</div>
					</form>
					<br /><br />
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
