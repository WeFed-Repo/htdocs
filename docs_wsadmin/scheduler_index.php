<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<title>Wetools</title>
		<link rel="stylesheet" href="/css/wsadmin.css" type="text/css" media="all" />
		<link rel="stylesheet" href="/css/wsadmin_print.css" type="text/css" media="print" />
		<link rel="stylesheet" href="/css/wetools_datepickercontrol.css" type="text/css" media="all" />
		<!--link rel="stylesheet" href="/css/Spacetree.css" type="text/css" media="all" /-->
		<script src="/js/frontEnd.js" type="text/javascript"></script>	
		<script src="/js/jquery.js" type="text/javascript"></script>	
		<script src="/js/wetools_datepickercontrol.js" type="text/javascript"></script>
		<script src="/js/treeview.js" type="text/javascript"></script>
		<link rel="shortcut icon" href="/favicon.ico" />
	</head>
	<body class="scheduler">
		<div id="header">
			<a href="scheduler_index.php?layout=home">
			<h1 class="logo">
				<span>WeTools</span>
			</h1>
			</a>
			<div id="infooperatore">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="4"><strong>OPERATORE</strong></td>
					</tr>
					<tr>
						<td colspan="2"><span>Mario Rossi</span></td>
						<td class="separ">Profilo:</td><td class="tolltipclick">
						<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum lorem ipsum</a></span>
						<span class="uniqTooltipInnerHTML">
							<p>01234567890123456789<br>01234567890123456789<br>01234567890123456789</p>
							</span></span></span></td>
					</tr>
					<tr>
						<td>Matricola:</td>
						<td><span>00312893</span></td>
						<td class="separ">Scadenza pwd:</td>
						<td><span class="scadpwd">99</span></td>
					</tr>
					<tr>
						<td>Ufficio:</td>
						<td><span>12345</span></td>
						<td colspan="2">&nbsp;</td>
					</tr>
				</table>
			</div>
			
			<div id="logout">
				<a href="scheduler_login.php"><img src="/img/scheduler_btn_esci.gif"></a>
				<a href="scheduler_login.php"><img src="/img/scheduler_btn_entra.gif"></a>
			</div>
		</div>
		<div id="topmenu">
			<ul>
				<li><a href="index.php?layout=int&page=sample_content">Gestione amministrativa</a></li>
				<li><a href="index.php?layout=int&page=sample_content_chart">Gestione canoni</a></li>
				<li><a href="index.php?layout=int&page=sample_content">Gestione contenuti sito</a></li>
				<li><a href="index.php?layout=int&page=sample_content">Gestione profili</a></li>
				<li><a href="index.php?layout=int&page=ub" <?php if($_GET["page"]=="ub" || $_GET["page"]=="ub_dettagli" ) print ("class=\"selected\"");?>>Utility banking</a></li>
				<li><a href="index.php?layout=int&page=599">599</a></li>
				<li><a href="index.php?layout=int&page=599_5col">599 5col</a></li>
				<li><a href="index.php?layout=int&page=deroghe">deroghe</a></li>
				<li><a href="index.php?layout=int&page=prestito_titoli">prestito titoli</a></li>
				<li><a href="index.php?layout=int&page=alert">alert</a></li>
				<li><a href="index.php?layout=int&page=fondi_sicav">fondi sicav</a></li>
				<li><a href="index.php?layout=int&page=gestione_credenziali">gestione credenziali</a></li>
				<li><a href="index.php?layout=int&page=richiesta_carta_jeans">richiesta_carta_jeans</a></li>
				<li><a href="index.php?layout=int&page=firma_digitale">firma digitale</a></li>
				<li><a href="index.php?layout=int&page=eventi">eventi</a></li>
			</ul>
		</div>
		<?php 
			$layout = $_GET["layout"]; 
			switch ($layout)
			{
				case "home":
					include("layout_home.php");
					break;
				
				case "int":
					include("layout_internal.php");
					break;
				case "ub":
					include("layout_internal_ub.php");
					break;
				case "nomenu":
					include("layout_nomenu.php");
					break;
			}
		?>
		<div id="footer">
			<p class="disclaimer">	
			<strong>Ricorda</strong>: Non permettere ad alcuno di utilizzare questo strumento con la tua utenza<br>
			Non diffondere in alcun modo le informazione di cui verrai a conoscenza durante il tuo lavoro
			</p>
			<ul class="footermenu">
				<li class="first"><a href="#">Lorem ipsum</a></li>
				<li><a href="#">Dolor</a></li>
				<li><a href="#">Sit amet cons</a></li>
				<li><a href="#">Elit</a></li>
				<li><a href="#">Adipiscing</a></li>
			</ul>
			<p class="footnotes">&copy; Lorem ipsum dolor sit - Amet 123890029</p>
		</div>
	</body>
</html>