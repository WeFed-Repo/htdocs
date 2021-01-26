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
  	echo "<meta http-equiv=\"refresh\" content=\"1;url=http://libreriewebank" . $porta . "/connect.php?page=template_old/index_mail_operative.php&customer=ret\">";
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
  <h2>Librerie mail operative <?php print strtoupper($fullname) ?><?php if ($bank != "webank") {?> <a href="connect.php?page=template_old/index_mail_operative.php&customer=<?php if ($customer=="ret") {print "bus";} else {print "ret";} ?>"><?php print $customername ?></a><?php } ?></h2>
  <?php 
	virtual ("old_navconsole.php");
	?>
  <br class="clear" />  
</div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
      <td valign="top" width="100%" align="center" colspan="2" class="bordo"><h3>TEMPLATE MAIL</h3></td>
</tr>
<?php if ($bank == "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>AOL</li></ul></td>
	<td align="center" class="bordo">
		<a href="http://librerie<?php echo $hostsuffix ?>/mail_aol.html">Mail step apertura</a>
	</td>
</tr>
<?php } ?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Ciclo di vita</li></ul></td>
	<td align="center" class="bordo">
	<?php if ($customer != "bus"){?>
		<?php if ($bank == "webank"){?> <a href="connect.php?page=template_old/tpl_priv_wb_mail.php">Ret Ciclo di Vita</a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail_no_appr.php">Ret Ciclo di Vita2</a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail_mgm.php">Ret Ciclo di Vita3</a><?php } ?> <?php if ($bank != "webank"){?><a href="connect.php?page=template_old/tpl_priv_mail.php">Ret Ciclo di Vita</a>|<a href="connect.php?page=template_old/tpl_priv_mail_no_appr.php">Ret Ciclo di Vita2</a><?php } ?></td>
	<?php } ?>
	
	<?php if ($customer == "bus"){?>
	<a href="connect.php?page=template_old/tpl_priv_bus_mail.php">Bus Ciclo di Vita</a> | <a href="connect.php?page=template_old/tpl_priv_bus_mail_no_appr.php">Bus Ciclo di Vita2</a>
	<?php } ?>
</tr>
<?php if ($bank == "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Comportamenti premianti</li></ul></td>
	<td align="center" class="bordo">
		<a href="connect.php?page=template_old/tpl_priv_mail_comportamenti_prem.php">Mail generica</a>
	</td>
</tr>
<?php } ?>
<?php if ($bank == "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Facebook</li></ul></td>
	<td align="center" class="bordo">
		<a href="http://librerie<?php echo $hostsuffix ?>/facebook/Mail_Mgm_html/mail.html">Mail MGM 1</a> | <a href="http://librerie<?php echo $hostsuffix ?>/facebook/Mail_Mgm_html/mail2.html">Mail MGM 2</a> | <a href="http://librerie<?php echo $hostsuffix ?>/facebook/Mail_Mgm_html/mail3.html">Mail MGM 3</a>
	</td>
</tr>
<?php } ?>
<?php if ($bank == "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>MGM 2014</li></ul></td>
	<td align="center" class="bordo">
		<a href="connect.php?page=template_old/tpl_priv_mail_presentatori_2014.php">Mail MGM presentatori</a> 
	</td>
</tr>
<?php } ?>
<?php if ($bank == "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Mail condivisione</li></ul></td>
	<td align="center" class="bordo">
		<a href="connect.php?page=template_old/tpl_priv_wb_mail_condivisione.php">Mail condivisione</a>
	</td>
</tr>
<?php } ?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Questionario</li></ul></td>
	<td align="center" class="bordo">
	<?php if ($customer != "bus"){?>
		<a href="connect.php?page=template_old/tpl_priv_questionario.php">Questionario</a> | <a href="connect.php?page=template_old/tpl_priv_questionario.php">Questionario risposta</a>
	<?php } ?>
	<?php if ($customer == "bus"){?>
		<a href="connect.php?page=template_old/tpl_priv_bus_questionario.php">Questionario</a> | <a href="connect.php?page=template_old/tpl_priv_bus_questionario_risposta.php">Questionario risposta</a>
	<?php } ?>
	</td>
</tr>
<?php if ($customer != "bus"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Ret</li></ul></td>
	<td align="center" class="bordo">
		<?php if ($bank == "webank"){?><a href="connect.php?page=template_old/tpl_priv_mail2.php">Ret </a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail3.php">Ret2 </a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail3b.php">Ret2b</a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail3c.php">Ret2c</a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail4.php">Ret4</a> | <a href="connect.php?page=template_old/tpl_priv_wb_mail_bollo.php">Bollo</a><?php } ?><?php if ($bank != "webank"){?><a href="connect.php?page=template_old/tpl_priv_mail3.php">Ret2 </a> | <a href="connect.php?page=template_old/tpl_priv_mail3_regalo.php">Ret 3</a><?php } ?>
	</td>
</tr>
<?php } ?>
<?php if ($bank != "webank"){?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>BancoBpm</li></ul></td>
	<td align="center" class="bordo">
		<a href="connect.php?page=template_old/tpl_email_bancobpm.php">tpl </a>
	</td>
</tr>
<?php } ?>
<tr>
	<td class="bordo paddbot5" width="20%"><ul><li>Youweb</li></ul></td>
	<td align="center" class="bordo">
		<a href="http://youweb.webank.local/email/mail_youweb/mail.html">tpl modificato</a>  | <a href="http://youweb.webank.local/email/mail_youweb/mail_originale.html">originale youweb</a>
	</td>
</tr>

</table>

</body>