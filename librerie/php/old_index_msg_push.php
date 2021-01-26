<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<title>Librerie <?php print $fullname ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="it">
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript">
<meta name="script" http-equiv="Content-Style-Type" content="text/css">
<?php
//solo per il caso webank
if ($bank == "webank" && $customer == "bus") {
  	echo "<meta http-equiv=\"refresh\" content=\"1;url=http://libreriewebank" . $porta . "/connect.php?page=index_mail_operative.php&customer=ret\">";
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
</head>
<body bgcolor="#ffffff">
<div class="head">
  <h2>Librerie Msg Push <?php print strtoupper($fullname) ?><?php if ($bank != "webank") {?> <a href="connect.php?page=index_mail_operative.php&customer=<?php if ($customer=="ret") {print "bus";} else {print "ret";} ?>"><?php print $customername ?></a><?php } ?></h2>
  <?php 
	virtual ("old_navconsole.php");
	?>
  <br class="clear" />  
</div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
      <td valign="top" width="100%" align="center" colspan="2" class="bordo"><h3>Msg Push</h3></td>
</tr>

<?php if ($bank == "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta TotalErg (richiesta carta)</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta_totalerg/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta_totalerg/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta TotalErg (utilizzo carta)</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta_totalerg_utilizzo/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta_totalerg_utilizzo/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta Telepass</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta_telepass/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta_telepass/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Promo bolli</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/promo_bolli/index.html">Web view off</a> | <a href="/wbapp/promo/promo_bolli/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta si fa in tre</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta_sifaintre/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta_sifaintre/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta speso</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta_speso/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta_speso/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Cartaimpronta speso 2&deg; periodo</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/cartimpronta_speso2/index.html">Web view off</a> | <a href="/wbapp/promo/cartimpronta_speso2/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>MGM</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/mgm/index.html">Web view off</a> | <a href="/wbapp/promo/mgm/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>DailyPay</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/dailypay/index.html">Web view off</a> | <a href="/wbapp/promo/dailypay/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Extramoney</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/extramoney/index.html">Web view off</a> | <a href="/wbapp/promo/extramoney/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Trading mobile</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/trading_mobile/index.html">Web view off</a> | <a href="/wbapp/promo/trading_mobile/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>MGM 2016</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/mgm_2016/index.html">Web view off</a> | <a href="/wbapp/promo/mgm_2016/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>MGM 2016 reminder</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/mgm_2016_reminder/index.html">Web view off</a> | <a href="/wbapp/promo/mgm_2016_reminder/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Bancomat</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/bancomat/index.html">Web view off</a> | <a href="/wbapp/promo/bancomat/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Bancomat luglio si requisiti</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/bancomat/index_luglio_si_requisiti.html">Web view off</a> | <a href="/wbapp/promo/bancomat/index_luglio_si_requisiti.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Bancomat luglio no requisiti</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/bancomat/index_luglio_no_requisiti.html">Web view off</a> | <a href="/wbapp/promo/bancomat/index_luglio_no_requisiti.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Jiffy</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/jiffy/index.html">Web view off</a> | <a href="/wbapp/promo/jiffy/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Deposito titoli</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/deposito_titoli/index.html">Web view off</a> | <a href="/wbapp/promo/deposito_titoli/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Zurich</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/zurich/index.html">Web view off</a> | <a href="/wbapp/promo/zurich/index.html?status=dettagli">Web view on</a>
	</td>
</tr>

<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>MGM 2017</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/mgm_2017/index.html">Web view off</a> | <a href="/wbapp/promo/mgm_2017/index.html?status=dettagli">Web view on</a>
	</td>
</tr>

<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Contabili online</li></ul></td>
	<td align="center" class="bordo">
		<a href="/wbapp/promo/contabili/index.html">Web view off</a> | <a href="/wbapp/promo/contabili/index.html?status=dettagli">Web view on</a>
	</td>
</tr>

<?php } ?>

<?php if ($bank == "bpm") { ?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Jiffy</li></ul></td>
	<td align="center" class="bordo">
		<a href="http://libreriebpm.webank.local/wbapp/promo/jiffy/index.html">Web view off</a> | <a href="/wbapp/promo/jiffy/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Mutuo tasso fisso e variabile</li></ul></td>
	<td align="center" class="bordo">
		<a href="http://libreriebpm.webank.local/wbapp/promo/mutuo/index.html">Web view off</a> | <a href="http://libreriebpm.webank.local/wbapp/promo/mutuo/index.html?status=dettagli">Web view on</a>
	</td>
</tr>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Mutuo chi bene comincia</li></ul></td>
	<td align="center" class="bordo">
		<a href="http://libreriebpm.webank.local/wbapp/promo/mutuo/index_chibencomincia.html">Web view off</a> | <a href="http://libreriebpm.webank.local/wbapp/promo/mutuo/index_chibencomincia.html?status=dettagli">Web view on</a>
	</td>
</tr>
<?php } ?>
</table>




</body>
</html>