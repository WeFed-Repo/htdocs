<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>Help contestuale</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
	<link href="/INLINEANET/iln/css/help.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body onload="self.focus();">
<?php
$tipologia = $_GET["type"];
$bank = $_GET["bank"];
?>
	<img src="/INLINEANET/iln/img/open_help.gif" alt="" title="Chiudi" usemap="#map" />
	<div id="contenthp">
		<h1>Nome funzione/sezione</h1>
<?php
if ($tipologia != "TESO")
	{
?>		
		<h2><img src="/INLINEANET/iln/img/tit_visita_virt_hc.gif" alt="Visita virtuale" title="Visita virtuale" /></h2>
		<a href="#1"><img src="/INLINEANET/iln/img/btn_guarda_demo.gif" alt="Visita virtuale" title="Visita virtuale" /></a>
<?php
}
?>
		<h2><img src="/INLINEANET/iln/img/tit_faq_hc.gif" alt="Faq" title="Faq" /></h2>
		<ul class="faq">
			<li><a href="help_faq_open.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus et purus.</a></li>
			<li><a href="#1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus et purus.2</a></li>
			<li><a href="#1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus et purus.</a></li>
			<li class="altre"><a href="help_faq_tutte.html"><b>Altre domande sulla sezione/funzione</b></a></li>
		</ul>
		<h2><img src="/INLINEANET/iln/img/tit_glossario_hc.gif" alt="Glossario" title="Glossario" /></h2>
		<form action="">
			<input type="text" value="Cerca una parola" /> <a href="help_glossario_open.html"><img src="/INLINEANET/iln/img/btn_cerca_priv.gif" alt="Cerca" title="Cerca" /></a>
		</form>
		<h2><img src="/INLINEANET/iln/img/tit_contatti_hc.gif" alt="Contatti" title="Contatti" /></h2>
<?php
if ($tipologia != "TESO")
	{
	?>
		<div class="boxcontatti">
			<span> 800.134.135</span>
			<ul>
				<li><a href="#1">Help Center ti richiama</a></li>
				<li><a href="#1">E-mail</a></li>
				<li><a href="#1">Trova l'agenzia</a></li>
			</ul>
		</div>
<?php
	}
else
	{
?>
<div class="boxcontatti2">
			<span> 800.134.135</span>
<?php
	if ($bank != "bm")
		{
?>
			<ul>
				<li><a href="#1">E-mail</a></li>
			</ul>
<?php
	}
?>
		</div>
<?php
	}
?>
		<a href="#1"><img src="/INLINEANET/iln/img/btn_naviga_help.gif" alt="Naviga tutto l'help center" title="Naviga tutto l'help center" /></a>
	</div>
<map name="map" id="map">
	<area alt="Chiudi" coords="171,3,194,19" href="#1" onclick="window.close();" />
</map>
</body>
</html>