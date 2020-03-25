<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>LIBRERIE BPM &raquo; Template struttura &raquo; Pagina Interna
2 colonne privata</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
	<meta name="description" content="inLineaNet: l'Internet Banking per le aziende" />
	<meta name="keywords" content="" />

	<meta name="distribution" content="Global" />
	<meta name="robots" content="all"  />
	<?php virtual("/wscmn/css/include_css_int.html"); ?>
	<?php virtual("/wscmn/css/include_css_priv_bus.html"); ?>
	<?php virtual("/wscmn/js/include_js_bus_priv.html"); ?>
	<!--CSS PER NUOVO LAYOUT BPM -->
	<?php
		if ($bank=="bpm")
	{
	?>
		<link href="/css/priv_new_layout.css" rel="stylesheet" type="text/css"  media="all"/>
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<!--[if IE 7]>
		<link rel="stylesheet" href="/css/font-awesome-ie7.min.css">
		<![endif]-->
		<?php } ?>
	<script type="text/javascript">
		var currentTab = 'nav_priv_wbx_myhome';
	</script>
</head>
<body>
<!-- INIZIO CODICE-->
 <?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_075.html"); ?>
<!-- FINE CODICE-->  
<div id="page">
 <!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/navigazione/nav_priv_001_bus_new.php"); ?>
<!-- FINE CODICE-->
<div id="content">
<div id="colsx">
<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/navigazione/nav_priv_002_bus.html"); ?>
<!-- FINE CODICE-->
</div>

<div id="main">	
<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/titoli/bus_priv_tit_001.html"); ?>
<!-- FINE CODICE-->
<br />

<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/navigazione/nav_black_priv_005.html"); ?>
<!-- FINE CODICE-->

<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/testi/txt_black_priv_001c.html"); ?>
<!-- FINE CODICE-->

<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/form/form_black_002_priv.html"); ?>
<!-- FINE CODICE--> 

<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/bottoni/bot_black_001.html"); ?>
<!-- FINE CODICE--> 

<!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/testi/txt_priv_011.html"); ?>
<!-- FINE CODICE-->


<br />



</div>


</div>
</div>
 <!-- INIZIO CODICE--> 
<?php virtual("/librerie/include/commons/footer/foot_priv_001.html"); ?>
<!-- FINE CODICE-->
</body>
</html>