<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<?php
$hostsuffix = ($_SERVER['HTTP_HOST'] == 'librerie')? '' : 'FIX';
?>
<title>Librerie <?php print $fullname ?> <?php print $customer ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="it">
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript">
<meta name="script" http-equiv="Content-Style-Type" content="text/css">
<?php
//solo per il caso webank
if ($bank == "webank" && $customer == "bus") {
  	echo "<meta http-equiv=\"refresh\" content=\"1;url=http://libreriewebank" . $hostsuffixa . "/connect.php?page=index.php&customer=ret\">";
	exit;
}
?>
<link rel="stylesheet" href="/wscmn/css/server.css"/>
<style>
	body {background-color: #fff !important;}
	.head {background-color: #fff; border: solid 2px <?php print $forecolor ?>; padding:5px 10px; margin:0 0 20px 0;}
	.head h2 {color: #666 !important}
	h3 {color: <?php print $forecolor ?>;}
</style>
<script type="text/javascript" src="/wscmn/js/ajax_low.js"></script>
</head>
<body bgcolor="#ffffff">
<div class="head">
  <h2>Librerie LANDING e MAIL</h2>
 
  <br class="clear" />  
</div>


<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="bordo paddbot5" width="20%" align="center"><h3>AREA</h3></td>
		<td class="bordo" align="center" width="80%"><h3>TEMPLATE LANDING</h3></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Bancarizzazione</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/landing_amex/landing.html">American Express</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Blocchi operativi</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/wbresp/html/landing_sas.html">Landing</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Congeliamo i bolli</li></ul></td>
		<td class="bordo" align="center" ><a href="http://libreriewebank.webank.local/lndpage/landing_superbollo/conto_tecnico/landing.html">Conto tecnico</a>| <a href="http://libreriewebank.webank.local/lndpage/landing_superbollo/no_deposito_titoli/landing.html">No deposito titoli</a>| <a href="http://libreriewebank.webank.local/lndpage/landing_superbollo/si_deposito_no_prestito/landing.html">Deposito/noprestito</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Fondi e Sicav</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/fondi_sicav/eurizon/landing/fondi2.html">Guida Eurizon</a>| <a href="http://libreriewebank.webank.local/lndpage/fondi_sicav/normale/landing/landing.html">Guida Normale</a></td>
	</tr>
	<tr>
		<td class="bordo paddbot5"><ul><li>Groupon</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/groupon.html">Promo Groupon al 3,75%</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>IBM</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/IBM/home.htm">IBM</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Masterpass</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/video_masterpass.html">PAGINA CONTENITORE VIDEO</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>MediaWorld</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/mediaworld.html">Promo Mediaworld conto al 2,8%</a> | <a href="http://libreriewebank.webank.local/lndpage/mediaworld120.html"> Promo Mediaworld conto al 3%</a> | <a href="http://libreriewebank.webank.local/lndpage/landing_mediaworld_ipad/mediaworldipadiphone.html">Mediaworld Operazione iPad</a> | <a href="http://libreriewebank.webank.local/lndpage/landing_5premi/apri_conto_5_premi.html">Mediaworld Operazione multiprodotto</a> | <a href="http://libreriewebank.webank.local/lndpage/landing_ipadmini/ipadmini.html">Mediaworld + Ipad mini</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Metlife</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/metlife/landing/landing.html">Polizze Metlife</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>MGM</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/smammas.html">Smammas</a> | <a href="http://librerie.webank.local/lndpage/mgm_mediaworld_corriere.html">Mediaworld_corriere</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Prezzibenzina.it</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/prezzibenzina2.html">Prezzi benzina</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Promo 3,2,1</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/promo321.html">Promo 3,2,1</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Sole24</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/sole24/landingSole.html">Portafogli di investimento</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Webank you</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/webankyou.html">Recruiting traders</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>We for traders</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/WeForTraders.html">Vantaggi trading</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Windows 8</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/windows8uni.html">Windows 8</a></td>
	</tr>
	<tr>
		<td class="bordo"><ul><li>Volaregratis</li></ul></td>
		<td class="bordo" align="center"><a href="http://libreriewebank.webank.local/lndpage/volaregratis/index.html">Promo Volaregratis</a></td>
	</tr>	
</table>

</body>
</html>
